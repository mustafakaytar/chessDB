<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'accessortest' => '/ludoDB/Tests/AccessorTest.php',
                'author' => '/ludoDB/examples/mod_rewrite/Author.php',
                'book' => '/ludoDB/examples/mod_rewrite/Book.php',
                'bookauthor' => '/ludoDB/examples/mod_rewrite/BookAuthor.php',
                'bookauthors' => '/ludoDB/examples/mod_rewrite/BookAuthors.php',
                'brand' => '/ludoDB/Tests/classes/Brand.php',
                'cachetest' => '/ludoDB/Tests/CacheTest.php',
                'capital' => '/ludoDB/Tests/classes/JSONCaching/Capital.php',
                'capitals' => '/ludoDB/Tests/classes/JSONCaching/Capitals.php',
                'car' => '/ludoDB/Tests/classes/Car.php',
                'carcollection' => '/ludoDB/Tests/classes/CarCollection.php',
                'carproperties' => '/ludoDB/Tests/classes/CarProperties.php',
                'carproperty' => '/ludoDB/Tests/classes/CarProperty.php',
                'chat' => '/chat/Chat.php',
                'chatmessage' => '/chat/ChatMessage.php',
                'chatmessages' => '/chat/ChatMessages.php',
                'chessfileupload' => '/ChessFileUpload.php',
                'chesstests' => '/Tests/ChessTests.php',
                'city' => '/ludoDB/Tests/classes/City.php',
                'client' => '/ludoDB/Tests/classes/Client.php',
                'collectiontest' => '/ludoDB/Tests/CollectionTest.php',
                'columnaliastest' => '/ludoDB/Tests/ColumnAliasTest.php',
                'configparsertest' => '/ludoDB/Tests/ConfigParserTest.php',
                'configparsertestjson' => '/ludoDB/Tests/ConfigParserTestJSON.php',
                'country' => '/ludoDB/Tests/classes/Country.php',
                'database' => '/Database.php',
                'fen' => '/Fen.php',
                'fentest' => '/Tests/FenTest.php',
                'findertest' => '/ludoDB/Tests/FinderTest.php',
                'folder' => '/Folder.php',
                'forsqltest' => '/ludoDB/Tests/classes/ForSQLTest.php',
                'game' => '/Game.php',
                'gameimport' => '/Tests/GameImport.php',
                'gametest' => '/Tests/GameTest.php',
                'importtest' => '/Tests/ImportTest.php',
                'jsontest' => '/ludoDB/Tests/JSONTest.php',
                'ludodb' => '/ludoDB/LudoDB.php',
                'ludodbadapter' => '/ludoDB/LudoDBInterfaces.php',
                'ludodbcache' => '/ludoDB/LudoDBCache.php',
                'ludodbclassnotfoundexception' => '/ludoDB/LudoDBExceptions.php',
                'ludodbcollection' => '/ludoDB/LudoDBCollection.php',
                'ludodbcollectionconfigparser' => '/ludoDB/LudoDBCollectionConfigParser.php',
                'ludodbconfigparser' => '/ludoDB/LudoDBConfigParser.php',
                'ludodbconnectionexception' => '/ludoDB/LudoDBExceptions.php',
                'ludodbexception' => '/ludoDB/LudoDBExceptions.php',
                'ludodbiterator' => '/ludoDB/LudoDBIterator.php',
                'ludodbmodel' => '/ludoDB/LudoDBModel.php',
                'ludodbmodeltests' => '/ludoDB/Tests/LudoDBModelTests.php',
                'ludodbmysql' => '/ludoDB/LudoDBMysql.php',
                'ludodbmysqli' => '/ludoDB/LudoDBMySqlI.php',
                'ludodbobject' => '/ludoDB/LudoDBObject.php',
                'ludodbobjectnotfoundexception' => '/ludoDB/LudoDBExceptions.php',
                'ludodbpdo' => '/ludoDB/LudoDBPDO.php',
                'ludodbregistry' => '/ludoDB/LudoDBRegistry.php',
                'ludodbrequesthandler' => '/ludoDB/LudoDBRequestHandler.php',
                'ludodbservice' => '/ludoDB/LudoDBInterfaces.php',
                'ludodbunauthorizedexception' => '/ludoDB/LudoDBExceptions.php',
                'ludosql' => '/ludoDB/LudoSQL.php',
                'manager' => '/ludoDB/Tests/classes/Manager.php',
                'metadata' => '/Metadata.php',
                'metadatacollection' => '/MetadataCollection.php',
                'metadatatest' => '/Tests/MetadataTest.php',
                'metadatavalue' => '/MetadataValue.php',
                'move' => '/Move.php',
                'moves' => '/Moves.php',
                'mysqlitests' => '/ludoDB/Tests/MysqlITests.php',
                'objectcreatortest' => '/ludoDB/Tests/ObjectCreatorTest.php',
                'pdotests' => '/ludoDB/Tests/PDOTests.php',
                'people' => '/ludoDB/Tests/classes/People.php',
                'peopleplain' => '/ludoDB/Tests/classes/PeoplePlain.php',
                'performancetest' => '/ludoDB/Tests/PerformanceTest.php',
                'person' => '/ludoDB/Tests/classes/Person.php',
                'personforconfigparser' => '/ludoDB/Tests/classes/PersonForConfigParser.php',
                'phone' => '/ludoDB/Tests/classes/Phone.php',
                'phonecollection' => '/ludoDB/Tests/classes/PhoneCollection.php',
                'player' => '/Player.php',
                'playerfinder' => '/PlayerFinder.php',
                'playertest' => '/Tests/PlayerTest.php',
                'requesthandlermock' => '/ludoDB/Tests/classes/RequestHandlerMock.php',
                'requesthandlertest' => '/ludoDB/Tests/RequestHandlerTest.php',
                'section' => '/ludoDB/Tests/classes/Section.php',
                'seek' => '/Seek.php',
                'seektest' => '/Tests/SeekTest.php',
                'session' => '/Session.php',
                'sessiontest' => '/Tests/SessionTest.php',
                'sqltest' => '/ludoDB/Tests/SQLTest.php',
                'testbase' => '/ludoDB/Tests/TestBase.php',
                'testgame' => '/ludoDB/Tests/classes/TestGame.php',
                'testtable' => '/ludoDB/Tests/classes/TestTable.php',
                'testtimer' => '/ludoDB/Tests/classes/TestTimer.php',
                'timecontrol' => '/TimeControl.php'
            );
        }
        $cn = strtolower($class);
        if (isset($classes[$cn])) {
            require __DIR__ . $classes[$cn];
        }
    }
);
// @codeCoverageIgnoreEnd