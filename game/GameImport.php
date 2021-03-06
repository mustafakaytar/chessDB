<?php
/**
 * LudoDB model for game import
 * User: Alf Magne Kalleland
 * Date: 04.02.13
 */
class GameImport implements LudoDBService
{
    private $file;
    private $databaseId;

    public function __construct($databaseId = null, $file = null)
    {
        if (isset($file)) {
            $this->file = $file;
        }
        if (isset($databaseId)) {
            $this->databaseId = $databaseId;
        }
    }

    public function getValidServices()
    {
        return array('import', 'importQueued');
    }

    public function getOnSuccessMessageFor($service)
    {
        return "Games successfully imported";
    }

    public function importQueued()
    {
        $ret = array();
        if (!$this->databaseId) {
            throw new LudoDBInvalidArgumentsException("No database id given");
        }
        $files = $this->getPgnFilesInQueuedFolder();

        if (count($files) === 0) {
            throw new LudoDBObjectNotFoundException("No pgn files found in queued folder");
        }

        foreach ($files as $file) {
            $path = implode('/', array(ChessRegistry::getImportQueueFolder(), $file));
            $ret = array_merge($ret, $this->import(array("file" => $path, "databaseId" => $this->databaseId)));
            $this->moveFileToImportedFolder($path);
        }
        return $ret;
    }

    private function moveFileToImportedFolder($path)
    {
        $tokens = explode("/", $path);
        $filename = array_pop($tokens);
        $tokens[] = "imported";
        $tokens[] = date("YmdHis") . " - " . $filename;
        rename($path, implode("/", $tokens));
    }

    private function getPgnFilesInQueuedFolder()
    {
        $folder = ChessRegistry::getImportQueueFolder();
        if (!isset($folder)) {
            throw new Exception("PGN folder not set using ChessRegistry::setImportQueueFolder");
        }
        return ChessFSPgn::getPgnFilesIn($folder);
    }


    public function import($request)
    {
        $ret = array();
        $filePath = $this->getFilePath($request);
        if (!file_exists($filePath)) {
            throw new Exception("File not found $filePath", 400);
        }
        $parser = new PgnParser($filePath);
        $games = $parser->getGames();
        $dbId = $this->getDatabaseId($request);
        foreach ($games as $game) {
            $ret[] = $this->importGame($game, $dbId);
        }
        return $ret;
    }

    private function getFilePath($request)
    {
        if(isset($request['file']))return $request['file'];
        if(isset($request['pgnFile']) && is_numeric($request['pgnFile'])){
            $file = new ChessFileUpload($request['pgnFile']);
            return $file->getPathOnServer();
        }
        return false;

    }

    private function getDatabaseId($request)
    {
        if(isset($request['importAsNew']) && $request['importAsNew']){
            $db = new Database();
            $db->setTitle($request['newDatabase']);
            $db->setFolderId($request['folder']);
            $db->commit();
            return $db->getId();

        }
        return isset($request['database']) ? $request['database'] : $this->databaseId;
    }

    private function importGame($game, $intoDb = null)
    {
        $game['database_id'] = $intoDb;
        $g = new Game();
        $g->save($game);
        return $g->getId();
    }

    public function validateArguments($service, $args)
    {
        return true;
    }

    public function validateServiceData($service, $data)
    {
        if (!CurrentPlayer::getInstance()->hasAccessTo(ChessRoles::IMPORT_GAMES)) {
            throw new LudoDBUnauthorizedException("You do not have access to import games");
        }
        return true;
    }

    public function shouldCache($service)
    {
        return false;
    }

}
