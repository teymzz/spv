<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbdda11f17489153d9ac9ef590d3f09b8
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'spv\\mi\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'spv\\mi\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'spv\\mi\\core\\classes\\Ajax' => __DIR__ . '/../..' . '/core/classes/Ajax.php',
        'spv\\mi\\core\\classes\\Application' => __DIR__ . '/../..' . '/core/classes/Application.php',
        'spv\\mi\\core\\classes\\Attribs' => __DIR__ . '/../..' . '/core/classes/Attribs.php',
        'spv\\mi\\core\\classes\\Base' => __DIR__ . '/../..' . '/core/classes/Base.php',
        'spv\\mi\\core\\classes\\Benchmark' => __DIR__ . '/../..' . '/core/classes/Benchmark.php',
        'spv\\mi\\core\\classes\\Bolt' => __DIR__ . '/../..' . '/core/classes/Bolt.php',
        'spv\\mi\\core\\classes\\Collectibles' => __DIR__ . '/../..' . '/core/classes/Collectibles.php',
        'spv\\mi\\core\\classes\\Collection' => __DIR__ . '/../..' . '/core/classes/Collection.php',
        'spv\\mi\\core\\classes\\Controller' => __DIR__ . '/../..' . '/core/classes/Controller.php',
        'spv\\mi\\core\\classes\\Csrf' => __DIR__ . '/../..' . '/core/classes/Csrf.php',
        'spv\\mi\\core\\classes\\DB' => __DIR__ . '/../..' . '/core/classes/DB.php',
        'spv\\mi\\core\\classes\\DB\\DBBridge' => __DIR__ . '/../..' . '/core/classes/DB/DBBridge.php',
        'spv\\mi\\core\\classes\\DB\\DBCollectibles' => __DIR__ . '/../..' . '/core/classes/DB/DBCollectibles.php',
        'spv\\mi\\core\\classes\\DB\\DBCollection' => __DIR__ . '/../..' . '/core/classes/DB/DBCollection.php',
        'spv\\mi\\core\\classes\\DB\\DBConfig' => __DIR__ . '/../..' . '/core/classes/DB/DBConfig.php',
        'spv\\mi\\core\\classes\\DB\\DBConstruct' => __DIR__ . '/../..' . '/core/classes/DB/DBConstruct.php',
        'spv\\mi\\core\\classes\\DB\\DBHandler' => __DIR__ . '/../..' . '/core/classes/DB/DBHandler.php',
        'spv\\mi\\core\\classes\\DB\\DBHelpers' => __DIR__ . '/../..' . '/core/classes/DB/DBHelpers.php',
        'spv\\mi\\core\\classes\\DB\\DBInterface' => __DIR__ . '/../..' . '/core/classes/DB/DBInterface.php',
        'spv\\mi\\core\\classes\\DB\\DBMigrate' => __DIR__ . '/../..' . '/core/classes/DB/DBMigrate.php',
        'spv\\mi\\core\\classes\\DB\\DBMigrator' => __DIR__ . '/../..' . '/core/classes/DB/DBMigrator.php',
        'spv\\mi\\core\\classes\\DB\\DBModel' => __DIR__ . '/../..' . '/core/classes/DB/DBModel.php',
        'spv\\mi\\core\\classes\\DB\\DBOperators' => __DIR__ . '/../..' . '/core/classes/DB/DBOperators.php',
        'spv\\mi\\core\\classes\\DB\\DBPlugins' => __DIR__ . '/../..' . '/core/classes/DB/DBPlugins.php',
        'spv\\mi\\core\\classes\\DB\\DBSchema\\DBSCHEMA' => __DIR__ . '/../..' . '/core/classes/DB/DBSchema/DBSCHEMA.php',
        'spv\\mi\\core\\classes\\DB\\DBSchema\\DRAFT' => __DIR__ . '/../..' . '/core/classes/DB/DBSchema/DRAFT.php',
        'spv\\mi\\core\\classes\\DB\\DBSchema\\TBALTER' => __DIR__ . '/../..' . '/core/classes/DB/DBSchema/TBALTER.php',
        'spv\\mi\\core\\classes\\DB\\DBSchema\\TBCREATE' => __DIR__ . '/../..' . '/core/classes/DB/DBSchema/TBCREATE.php',
        'spv\\mi\\core\\classes\\DB\\DBSchema\\TBGROUP' => __DIR__ . '/../..' . '/core/classes/DB/DBSchema/TBGROUP.php',
        'spv\\mi\\core\\classes\\DB\\DBSchema\\TBPARTITION' => __DIR__ . '/../..' . '/core/classes/DB/DBSchema/TBPARTITION.php',
        'spv\\mi\\core\\classes\\DB\\DBStaticInterface' => __DIR__ . '/../..' . '/core/classes/DB/DBStaticInterface.php',
        'spv\\mi\\core\\classes\\DB\\MiPDO' => __DIR__ . '/../..' . '/core/classes/DB/MiPDO.php',
        'spv\\mi\\core\\classes\\DB\\MiSQL' => __DIR__ . '/../..' . '/core/classes/DB/MiSQL.php',
        'spv\\mi\\core\\classes\\Directives' => __DIR__ . '/../..' . '/core/classes/Directives.php',
        'spv\\mi\\core\\classes\\DomUrl' => __DIR__ . '/../..' . '/core/classes/DomUrl.php',
        'spv\\mi\\core\\classes\\Dumper' => __DIR__ . '/../..' . '/core/classes/Dumper.php',
        'spv\\mi\\core\\classes\\EInfo' => __DIR__ . '/../..' . '/core/classes/EInfo.php',
        'spv\\mi\\core\\classes\\Enlist' => __DIR__ . '/../..' . '/core/classes/Enlist.php',
        'spv\\mi\\core\\classes\\FileManager' => __DIR__ . '/../..' . '/core/classes/FileManager.php',
        'spv\\mi\\core\\classes\\FormField' => __DIR__ . '/../..' . '/core/classes/FormField.php',
        'spv\\mi\\core\\classes\\FormModel' => __DIR__ . '/../..' . '/core/classes/FormModel.php',
        'spv\\mi\\core\\classes\\Frame' => __DIR__ . '/../..' . '/core/classes/Frame.php',
        'spv\\mi\\core\\classes\\Hasher' => __DIR__ . '/../..' . '/core/classes/Hasher.php',
        'spv\\mi\\core\\classes\\Jsonfy' => __DIR__ . '/../..' . '/core/classes/Jsonfy.php',
        'spv\\mi\\core\\classes\\JwsToken' => __DIR__ . '/../..' . '/core/classes/JwsToken.php',
        'spv\\mi\\core\\classes\\Mailer' => __DIR__ . '/../..' . '/core/classes/Mailer.php',
        'spv\\mi\\core\\classes\\Meta' => __DIR__ . '/../..' . '/core/classes/Meta.php',
        'spv\\mi\\core\\classes\\Model' => __DIR__ . '/../..' . '/core/classes/Model.php',
        'spv\\mi\\core\\classes\\ModelOptimizer' => __DIR__ . '/../..' . '/core/classes/ModelOptimizer.php',
        'spv\\mi\\core\\classes\\Notice' => __DIR__ . '/../..' . '/core/classes/Notice.php',
        'spv\\mi\\core\\classes\\Request' => __DIR__ . '/../..' . '/core/classes/Request.php',
        'spv\\mi\\core\\classes\\Rescom' => __DIR__ . '/../..' . '/core/classes/Rescom.php',
        'spv\\mi\\core\\classes\\Rescon' => __DIR__ . '/../..' . '/core/classes/Rescon.php',
        'spv\\mi\\core\\classes\\Resin' => __DIR__ . '/../..' . '/core/classes/Resin.php',
        'spv\\mi\\core\\classes\\Resource' => __DIR__ . '/../..' . '/core/classes/Resource.php',
        'spv\\mi\\core\\classes\\Response' => __DIR__ . '/../..' . '/core/classes/Response.php',
        'spv\\mi\\core\\classes\\Ress' => __DIR__ . '/../..' . '/core/classes/Ress.php',
        'spv\\mi\\core\\classes\\Resx' => __DIR__ . '/../..' . '/core/classes/Resx.php',
        'spv\\mi\\core\\classes\\Rex' => __DIR__ . '/../..' . '/core/classes/Rex.php',
        'spv\\mi\\core\\classes\\Router' => __DIR__ . '/../..' . '/core/classes/Router.php',
        'spv\\mi\\core\\classes\\SETTER' => __DIR__ . '/../..' . '/core/classes/SETTER.php',
        'spv\\mi\\core\\classes\\SharedInfo' => __DIR__ . '/../..' . '/core/classes/SharedInfo.php',
        'spv\\mi\\core\\classes\\Slicer' => __DIR__ . '/../..' . '/core/classes/Slicer.php',
        'spv\\mi\\core\\classes\\Spinner' => __DIR__ . '/../..' . '/core/classes/Spinner.php',
        'spv\\mi\\core\\classes\\Spoova' => __DIR__ . '/../..' . '/core/classes/Spoova.php',
        'spv\\mi\\core\\classes\\Time' => __DIR__ . '/../..' . '/core/classes/Time.php',
        'spv\\mi\\core\\classes\\TimeClass' => __DIR__ . '/../..' . '/core/classes/TimeClass.php',
        'spv\\mi\\core\\classes\\Url' => __DIR__ . '/../..' . '/core/classes/Url.php',
        'spv\\mi\\core\\classes\\UrlMapper' => __DIR__ . '/../..' . '/core/classes/UrlMapper.php',
        'spv\\mi\\core\\classes\\UserAuth' => __DIR__ . '/../..' . '/core/classes/UserAuth.php',
        'spv\\mi\\core\\classes\\UserDB' => __DIR__ . '/../..' . '/core/classes/UserDB.php',
        'spv\\mi\\core\\classes\\UserHandler' => __DIR__ . '/../..' . '/core/classes/UserHandler.php',
        'spv\\mi\\core\\classes\\UserIdResolver' => __DIR__ . '/../..' . '/core/classes/UserIdResolver.php',
        'spv\\mi\\core\\classes\\constants\\CASTED' => __DIR__ . '/../..' . '/core/classes/constants/CASTED.php',
        'spv\\mi\\core\\commands\\Add' => __DIR__ . '/../..' . '/core/commands/Add.php',
        'spv\\mi\\core\\commands\\Backup' => __DIR__ . '/../..' . '/core/commands/Backup.php',
        'spv\\mi\\core\\commands\\Clean' => __DIR__ . '/../..' . '/core/commands/Clean.php',
        'spv\\mi\\core\\commands\\Cli' => __DIR__ . '/../..' . '/core/commands/Cli.php',
        'spv\\mi\\core\\commands\\Config' => __DIR__ . '/../..' . '/core/commands/Config.php',
        'spv\\mi\\core\\commands\\Console' => __DIR__ . '/../..' . '/core/commands/Console.php',
        'spv\\mi\\core\\commands\\Database' => __DIR__ . '/../..' . '/core/commands/Database.php',
        'spv\\mi\\core\\commands\\Desc' => __DIR__ . '/../..' . '/core/commands/Desc.php',
        'spv\\mi\\core\\commands\\Entry' => __DIR__ . '/../..' . '/core/commands/Entry.php',
        'spv\\mi\\core\\commands\\Info' => __DIR__ . '/../..' . '/core/commands/Info.php',
        'spv\\mi\\core\\commands\\InfoDoc' => __DIR__ . '/../..' . '/core/commands/InfoDoc.php',
        'spv\\mi\\core\\commands\\Install' => __DIR__ . '/../..' . '/core/commands/Install.php',
        'spv\\mi\\core\\commands\\InteractiveConsole' => __DIR__ . '/../..' . '/core/commands/InteractiveConsole.php',
        'spv\\mi\\core\\commands\\Make\\MkAPI' => __DIR__ . '/../..' . '/core/commands/Make/MkAPI.php',
        'spv\\mi\\core\\commands\\Make\\MkBase' => __DIR__ . '/../..' . '/core/commands/Make/MkBase.php',
        'spv\\mi\\core\\commands\\Make\\MkFrame' => __DIR__ . '/../..' . '/core/commands/Make/MkFrame.php',
        'spv\\mi\\core\\commands\\Make\\MkMigrator' => __DIR__ . '/../..' . '/core/commands/Make/MkMigrator.php',
        'spv\\mi\\core\\commands\\Make\\MkModel' => __DIR__ . '/../..' . '/core/commands/Make/MkModel.php',
        'spv\\mi\\core\\commands\\Make\\MkRex' => __DIR__ . '/../..' . '/core/commands/Make/MkRex.php',
        'spv\\mi\\core\\commands\\Make\\MkRoute' => __DIR__ . '/../..' . '/core/commands/Make/MkRoute.php',
        'spv\\mi\\core\\commands\\Make\\MkWindow' => __DIR__ . '/../..' . '/core/commands/Make/MkWindow.php',
        'spv\\mi\\core\\commands\\Map' => __DIR__ . '/../..' . '/core/commands/Map.php',
        'spv\\mi\\core\\commands\\Migrate' => __DIR__ . '/../..' . '/core/commands/Migrate.php',
        'spv\\mi\\core\\commands\\MkFile' => __DIR__ . '/../..' . '/core/commands/MkFile.php',
        'spv\\mi\\core\\commands\\Project' => __DIR__ . '/../..' . '/core/commands/Project.php',
        'spv\\mi\\core\\commands\\Root' => __DIR__ . '/../..' . '/core/commands/Root.php',
        'spv\\mi\\core\\commands\\Syntax' => __DIR__ . '/../..' . '/core/commands/Syntax.php',
        'spv\\mi\\core\\commands\\Test' => __DIR__ . '/../..' . '/core/commands/Test.php',
        'spv\\mi\\core\\commands\\Watch' => __DIR__ . '/../..' . '/core/commands/Watch.php',
        'spv\\mi\\core\\commands\\Welcome' => __DIR__ . '/../..' . '/core/commands/Welcome.php',
        'spv\\mi\\core\\server\\Serve' => __DIR__ . '/../..' . '/core/server/Serve.php',
        'spv\\mi\\core\\tools\\FileUploader' => __DIR__ . '/../..' . '/core/tools/FileUploader.php',
        'spv\\mi\\core\\tools\\ImageClass' => __DIR__ . '/../..' . '/core/tools/ImageClass.php',
        'spv\\mi\\core\\tools\\Input' => __DIR__ . '/../..' . '/core/tools/Input.php',
        'spv\\mi\\core\\widget\\NavBuild' => __DIR__ . '/../..' . '/core/widget/NavBuild.php',
        'spv\\mi\\core\\widget\\NavEngine' => __DIR__ . '/../..' . '/core/widget/NavEngine.php',
        'spv\\mi\\core\\widget\\NavHandle' => __DIR__ . '/../..' . '/core/widget/NavHandle.php',
        'spv\\mi\\core\\widget\\NavSettings' => __DIR__ . '/../..' . '/core/widget/NavSettings.php',
        'spv\\mi\\windows\\Frames\\AccessFrame' => __DIR__ . '/../..' . '/windows/Frames/AccessFrame.php',
        'spv\\mi\\windows\\Frames\\UserFrame' => __DIR__ . '/../..' . '/windows/Frames/UserFrame.php',
        'spv\\mi\\windows\\Models\\Access\\AccessModel' => __DIR__ . '/../..' . '/windows/Models/Access/AccessModel.php',
        'spv\\mi\\windows\\Models\\Access\\Login' => __DIR__ . '/../..' . '/windows/Models/Access/Login.php',
        'spv\\mi\\windows\\Models\\Access\\Signup' => __DIR__ . '/../..' . '/windows/Models/Access/Signup.php',
        'spv\\mi\\windows\\Models\\User' => __DIR__ . '/../..' . '/windows/Models/User.php',
        'spv\\mi\\windows\\Routes\\API\\Profile' => __DIR__ . '/../..' . '/windows/Routes/API/Profile.php',
        'spv\\mi\\windows\\Routes\\About' => __DIR__ . '/../..' . '/windows/Routes/About.php',
        'spv\\mi\\windows\\Routes\\Docs' => __DIR__ . '/../..' . '/windows/Routes/Docs.php',
        'spv\\mi\\windows\\Routes\\Docs\\Apis' => __DIR__ . '/../..' . '/windows/Routes/Docs/Apis.php',
        'spv\\mi\\windows\\Routes\\Docs\\Classes' => __DIR__ . '/../..' . '/windows/Routes/Docs/Classes.php',
        'spv\\mi\\windows\\Routes\\Docs\\Cli' => __DIR__ . '/../..' . '/windows/Routes/Docs/Cli.php',
        'spv\\mi\\windows\\Routes\\Docs\\Cli\\Cli' => __DIR__ . '/../..' . '/windows/Routes/Docs/Cli/Cli.php',
        'spv\\mi\\windows\\Routes\\Docs\\Commands' => __DIR__ . '/../..' . '/windows/Routes/Docs/Commands.php',
        'spv\\mi\\windows\\Routes\\Docs\\Database' => __DIR__ . '/../..' . '/windows/Routes/Docs/Database.php',
        'spv\\mi\\windows\\Routes\\Docs\\Directives' => __DIR__ . '/../..' . '/windows/Routes/Docs/Directives.php',
        'spv\\mi\\windows\\Routes\\Docs\\Features' => __DIR__ . '/../..' . '/windows/Routes/Docs/Features.php',
        'spv\\mi\\windows\\Routes\\Docs\\Features\\Css' => __DIR__ . '/../..' . '/windows/Routes/Docs/Features/Css.php',
        'spv\\mi\\windows\\Routes\\Docs\\Features\\Javascript' => __DIR__ . '/../..' . '/windows/Routes/Docs/Features/Javascript.php',
        'spv\\mi\\windows\\Routes\\Docs\\Forms' => __DIR__ . '/../..' . '/windows/Routes/Docs/Forms.php',
        'spv\\mi\\windows\\Routes\\Docs\\Functions' => __DIR__ . '/../..' . '/windows/Routes/Docs/Functions.php',
        'spv\\mi\\windows\\Routes\\Docs\\Libraries' => __DIR__ . '/../..' . '/windows/Routes/Docs/Libraries.php',
        'spv\\mi\\windows\\Routes\\Docs\\Mails' => __DIR__ . '/../..' . '/windows/Routes/Docs/Mails.php',
        'spv\\mi\\windows\\Routes\\Docs\\Plugins' => __DIR__ . '/../..' . '/windows/Routes/Docs/Plugins.php',
        'spv\\mi\\windows\\Routes\\Docs\\Resource' => __DIR__ . '/../..' . '/windows/Routes/Docs/Resource.php',
        'spv\\mi\\windows\\Routes\\Docs\\Routings' => __DIR__ . '/../..' . '/windows/Routes/Docs/Routings.php',
        'spv\\mi\\windows\\Routes\\Docs\\Sessions' => __DIR__ . '/../..' . '/windows/Routes/Docs/Sessions.php',
        'spv\\mi\\windows\\Routes\\Docs\\Setters' => __DIR__ . '/../..' . '/windows/Routes/Docs/Setters.php',
        'spv\\mi\\windows\\Routes\\Docs\\Template' => __DIR__ . '/../..' . '/windows/Routes/Docs/Template.php',
        'spv\\mi\\windows\\Routes\\Docs\\UserAccounts' => __DIR__ . '/../..' . '/windows/Routes/Docs/UserAccounts.php',
        'spv\\mi\\windows\\Routes\\Docs\\Wmv' => __DIR__ . '/../..' . '/windows/Routes/Docs/Wmv.php',
        'spv\\mi\\windows\\Routes\\Features' => __DIR__ . '/../..' . '/windows/Routes/Features.php',
        'spv\\mi\\windows\\Routes\\Formdata' => __DIR__ . '/../..' . '/windows/Routes/Formdata.php',
        'spv\\mi\\windows\\Routes\\Hello' => __DIR__ . '/../..' . '/windows/Routes/Hello.php',
        'spv\\mi\\windows\\Routes\\Home' => __DIR__ . '/../..' . '/windows/Routes/Home.php',
        'spv\\mi\\windows\\Routes\\Index' => __DIR__ . '/../..' . '/windows/Routes/Index.php',
        'spv\\mi\\windows\\Routes\\Install' => __DIR__ . '/../..' . '/windows/Routes/Install.php',
        'spv\\mi\\windows\\Routes\\Login' => __DIR__ . '/../..' . '/windows/Routes/Login.php',
        'spv\\mi\\windows\\Routes\\Posts' => __DIR__ . '/../..' . '/windows/Routes/Posts.php',
        'spv\\mi\\windows\\Routes\\Profile' => __DIR__ . '/../..' . '/windows/Routes/Profile.php',
        'spv\\mi\\windows\\Routes\\Signup' => __DIR__ . '/../..' . '/windows/Routes/Signup.php',
        'spv\\mi\\windows\\Routes\\Test' => __DIR__ . '/../..' . '/windows/Routes/Test.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbdda11f17489153d9ac9ef590d3f09b8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbdda11f17489153d9ac9ef590d3f09b8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbdda11f17489153d9ac9ef590d3f09b8::$classMap;

        }, null, ClassLoader::class);
    }
}
