const mix = require("laravel-mix");
const Rsync = require("rsync");

const themeName = "whiteboardv3";
const devUrl = "whiteboardv3.local";
const distFolder = `../${themeName}`;

const rsync = new Rsync()
	.flags("hvrPtzu")
	.set("exclude-from", "./.rsync-ignore")
	.source(".")
	.destination(distFolder);

mix.sass("./scss/style.scss", "./style.css")
	.js(
		[
			"./js/scripts.js",
			"./js/navigation.js",
			"./js/skip-link-focus-fix.js"
		],
		"./scripts.js"
	)
	.sourceMaps();

rsync.execute();

mix.browserSync({
	proxy: {
		target: devUrl
	},
	files: ["./style.css", "./*.js", "./**/*.php"],
	logLevel: "debug"
});
