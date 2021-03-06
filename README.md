[![Build Status](https://travis-ci.com/maddy2101/fluid-documentation-generator.svg?branch=master)](https://travis-ci.com/maddy2101/fluid-documentation-generator)
[![Coverage Status](https://coveralls.io/repos/github/maddy2101/fluid-documentation-generator/badge.svg?branch=master)](https://coveralls.io/github/maddy2101/fluid-documentation-generator?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/maddy2101/fluid-documentation-generator/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/maddy2101/fluid-documentation-generator/?branch=master)

Fluid (ViewHelper) Documentation Generator
==========================================

Generates a static site of Fluid ViewHelper documentation based on installed schemas from multiple vendors.


Core features
-------------

* Generate HTML site (via Fluid template engine) in public folder to serve every schema, separated by vendor and
  package names and with navigation included. HTML exporter is capable of rendering Markdown by default.
* Generate JSON data containing URLs to further navigate the JSON structures, á la GitHub's API.
* Include XSD file for download as public file.
* Generates completely predictable URLs that can be constructed externally based on, for example, a class name.
* Can be extended with additional publishing methods.


How to use
----------

1. Clone the repository or start a fresh project based on `namelesscoder/fluid-documentation-generator`.
2. Place your schema files in `schemas` directory in the root path. For example, a schema for version `1.2.3` of a
   package with the composer name `myvendor/my-packge` must be copied to `schemas/myvendor/my-package/1.2.3/schema.xsd`.
3. Run `./bin/generate-fluid-documentation` or `composer generate`
4. Either start a web server or add a virtual host pointing to the `public` directory, or simply open the
   `index.html` file from the public folder and browse the documentation locally. 

Each vendor, package and version dir can also be fitted with a `metadata.json` file containing data that the XSD schema
file cannot contain - such as the PHP namespace a package uses and the preferred namespace alias to use. See the section
below for detailed information about these metadata manifests.

The command supports exactly three arguments. If you wish to specify the second one, the first must also be specified,
and so on. However, the arguments can be empty to make the default value apply.

```bash
./bin/generate-fluid-documentation "`pwd`/public/" "https://example.localhost/" 1
# Or, if you just want defaults but need to specify the last argument:
./bin/generate-fluid-documentation "" "" 1

```

To explain the command arguments:

1. The public directory into which files are published - by default, this is the `public/` directory in the application
   root folder. Changing this obviously changes where all the public files get created.
2. The public accessible URL where the generated files will be reachable. Provide this if you want to serve the files on
   a web server. The URL gets used as prefix for absolute links, and absolute links get generated specifically for the
   JSON files (all URLs in those are absolute) and for the "resource" links presented on various pages. The URLs in JSON
   are of course absolute so you can traverse them programmatically. The "resource" links are always absolute so that if
   you view files locally, clicking any of the links or copying them for users, gives you the absolute URL.
3. A boolean (1 / 0) specifying whether to perform a forceful update of all generated files. If this is false, any files
   that already exist will not be regenerated. Useful if you add this to cron and generate from a collection at regular
   intervals and don't need to continuously re-write everything. Files that don't yet exist will of course be created.  


Metadata files
--------------

A somewhat restricted set of metadata files can be placed in different levels inside the `schemas` folder:

* In the `schemas` directory, a `README.md` file can be placed which will be rendered as root index HTML page.
* In vendors', packages' and versions' directory, a `README.md` file can be placed which will be rendered on the
  corresponding overview page. It will however be stripped of all HTML, since the idea is to let third party users
  manage these files. Markdown is supported, but link tags get removed.
* Also in all three folders, a `metadata.json` file can be placed. Like `.htaccess` files these are merged in a way that
  the more specific files' variables will override the more generic ones (a variable defined in a package overrides the
  same variable if it is also defined in the vendor's metadata file).

The `metadata.json` for a vendor may consist of:

```json
{
  "outlets": {
    "github": true,
    "packagist": true
  }
}
```

And the `metadata.json` for a package or a specific version of a package may consist of:

```json
{
  "namespace": {
    "alias": "v",
    "php": "\\FluidTYPO3\\Vhs\\ViewHelpers\\"
  },
  "outlets": {
    "github": true,
    "packagist": true,
    "ter": "vhs"
  }
}
```

(note that the `ter` outlet value must contain the TYPO3 extension key)

All settings are completely optional. Namespace information gets used when rendering schema and ViewHelper information,
and outlets toggled on result in links to those outlets (generated by convention using vendor and package name).

Anything that is defined at a higher level will be inherited to lower levels. For example, a package inherits from the
vendor metadata and a version's metadata inherits from the package and vendor.


Supported command line arguments
--------------------------------

The command line utility takes exactly three arguments. The arguments are not named and must be passed in sequence.

1. The absolute or relative path to the `data` folder of the application.
2. The absolute or relative path to the `public` folder of the application.
3. The absolute URL to the public folder - usually, `http://` or `https://` but `file://` dir path is also supported.

The absolute URL serves a purpose only when generating JSON API resources. The HTML interface can be used without giving
a public URL and works over HTTP or by opening HTML files in the browser. Note however that XSD and JSON schema resource
links can only be visited...

* If the absolute URL was not a `file://` URL and it can be reached.
* Or the HTML interface was loaded as local files and either no absolute URL, or a `file://` URL was provided.

In other words, links to remote files work on any protocol - and links to local files only work on local protocol. But
HTML files work in either mode.

Continue reading below to learn more.


How to consume as remote API
----------------------------

Information about vendors, packages, versions, schemas and individual ViewHelpers can be also be fetched with simple
`GET` requests to the host serving the public folder with generated documentation.

The application will generate JSON resources as graph data, which among other things means that regardless which JSON
resource you request, it will always contain the "main" resource plus summary versions of other, related resources.

Each graph data entity is fitted with a set of URLs that will provide further information about the entity. This means
that you can iterate for example ViewHelpers within a certain schema and obtain all the URLs that are needed to visit
the HTML rendering, request detailed JSON graph data for a related resource, and so on.

You can start navigating JSON graph data from the `index.json` file that gets placed in the public folder you specified.
Contrary to the HTML output, the JSON graph data will always link using an absolute URL (which is provided as argument
to the command line tool). If a custom public URL prefix is not provided, *the application will generate JSON links as
`file://` links which which will break the JSON schema link from a ViewHelper reference page if the HTML is not served
from `file://` urls as well*. If the output is to be served over HTTP then make sure you provide the absolute URL prefix
that points to the public folder.

The HTML interface also shows the JSON API link if the JSON exporter was used.


How to customise the resource generation
----------------------------------------

Customising the CSS (or adding JS to the mix) is fairly straight-forward. The public folder contains a folder named
`_assets` which by default contains a `styles.css` file. This file is included from the `Default` layout, which gets
rendered from the `resources` folder in the application root. All the templates are rendered using Fluid.

If you wish to extend the default collection of templates or change which exporters get used (for example, to prevent
JSON schemas from being exported) you need to reproduce the logic from the `bin/generate-fluid-documentation` script.
Excluding class loader and class imports, that script is:

```php
$dataDirectory = $argv[1] ?? $pwd . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR;
$publicDirectory = $argv[2] ?? $pwd . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR;
$publicUrlPrefix = rtrim($argv[3] ?? 'file://' . $publicDirectory, '/') . '/';

$resolver = DataFileResolver::getInstance($pwd);
$exporters = [
    new XsdExporter($publicUrlPrefix),
    new JsonExporter($publicUrlPrefix),
    new HtmlExporter($publicUrlPrefix),
];
$generator = new SchemaDocumentationGenerator($exporters);

echo 'Generating static files for:' . PHP_EOL;
foreach ($resolver->resolveInstalledVendors() as $vendor) {
    $generator->generateFilesForVendor($vendor);
    foreach ($vendor->getPackages() as $package) {
        $generator->generateFilesForPackage($package);
        echo '> ' . $vendor->getVendorName() . '/' . $package->getPackageName() . ': ';
        foreach ($package->getVersions() as $version) {
            echo $version->getVersion() . ' ';
            $generator->generateFilesForSchema(new Schema($version));
        }
        echo PHP_EOL;
    }
}
```

Which consists of three main blocks:

1. Resolving of data- and public directory paths, and public URL if provided. Assumed defaults from working directory. 
2. The assignment of Exporters - special classes which implement a shared interface and which each provides a type of
   resource exporting; copying the XSD file, generating JSON API files and generating HTML. Note that the JsonExporter
   and XsdExporter both require an absolute public URL as argument (see above regarding this public URL); and the
   HtmlExporter *should* also have the public URL though it is not required when not exporting JSON schemas and/or
   when not wanting HTML links in the exported JSON.
3. A three-dimension loop which iterates over all installed vendors, reading all installed packages, all versions of
   each package, and every ViewHelper documented in the schema of that version of the package.

As long as those three parts are reproduced, this logic can be called from anywhere - and of course the user feedback
can be changed from `echo()`ing to whichever method you like.

The command line utility is provided as a "most minimal with shipped exporters enabled, process everything" style script
which generates everything. You can also make atomic updates to generate only a single version.


Note about serving individual packages/versions etc.
----------------------------------------------------

The public folder is generated using a complete `$vendor/$package/$version` structure, which means that if you serve
files over HTTP and manipulate the document root setting, you can serve:

* All packages of a specific vendor (or your own)
* A specific package of a specific vendor (or your own)
* A specific version of a package

Each folder dimension is fitted with an `index.html` file so it can be used as starting point. There is one minor
inconvenience when serving a limited sub-set of the public folder: *links that bring the user to the types of overviews
you are not serving will instead end up on the topmost level you do serve*. For example, the link that takes you to the
overview of vendors (the normal public root) points to the list of versions if you are only serving a specific package
but not a specific version of a package.
