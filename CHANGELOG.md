# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/en/1.0.0/)
and this project adheres to [Semantic Versioning](http://semver.org/spec/v2.0.0.html).

## [Unreleased]

```
2020-09-10 12:33:45 Lost+Found.
2020-09-10 12:27:33 Reformat CSS (no code change).
2020-09-10 12:24:56 Fixed 'tail' layout and tweaked theme.
```

## [Release 1.3.0] 2020-09-08 18:22:54

Enabled octree to create initial palette for better colour results.

NOTE:	When upgrading from v1.2.0 you need to manually upgrade the database table:
	`alter table queue add numcolour int not null default 0 after outlinenr;` 

```
2020-09-08 18:17:51 Lost+Found.
2020-09-08 18:10:44 Fixed xyzzy/qrpicture#9 - Enable octree for initial palette.
2020-09-08 17:49:45 Fixed xyzzy/qrpicture#8 - Escape quotes in payload text.
2020-09-08 16:15:59 Fixed xyzzy/qrpicture#7 - Add `numColour`.
```

## [Release 1.2.0] 2020-09-03 01:22:40

Redesigned html/css from scratch for highly responsive mobile/desktop friendly site.

```
2020-09-03 01:15:27 Redesigned html/css from scratch and updates js accordingly.
2020-09-03 01:12:38 Reformat javascript and replace `var` with `let`.
2020-09-03 00:43:20 Fix asset and repository names.
```

## [Release 1.1.0] 2020-08-18 22:58:45

Feedback from AWS launch.
Most notably worker processes need to be manually started.

```
2020-08-18 22:38:58 Updated to mootools-1.6.0.
2020-08-18 15:50:49 Comment updates.
2020-08-18 15:49:02 Tune and cleanup index.php + qrpicture.js.
2020-08-18 15:46:02 Reformat `index.php`, no code change.
2020-08-18 15:43:01 Standalone worker process + database locking.
2020-08-18 15:42:04 Added missing site files.
2020-08-18 15:38:15 Introduce config.php for site settings.
2020-08-18 15:37:31 Updated README.md
2020-08-18 15:36:44 Updated database schema.
2020-08-18 15:02:40 Allow site access for search engines.
2020-08-13 21:39:01 Minor post-release fixups.
```

## Release 1.0.0 2020-08-13 21:01:10

```
2020-08-12 10:53:55 Initial commit.
2020-08-13 21:01:10 Reconstructed most of the functionality from backups.
```

[Unreleased]: https://github.com/xyzzy/qrpicture/compare/v1.3.0...HEAD
[1.3.0]: https://github.com/xyzzy/qrpicture/compare/v1.2.0...v1.3.0
[1.2.0]: https://github.com/xyzzy/qrpicture/compare/v1.1.0...v1.2.0
[1.1.0]: https://github.com/xyzzy/qrpicture/compare/v1.0.0...v1.1.0
