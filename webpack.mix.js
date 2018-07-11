const mix = require("laravel-mix");
// const Rsync = require("rsync");

// const themeName = "wp-whiteboard";
const devUrl = "whiteboardv3.local";
// const distFolder = `../${themeName}`;

// const rsync = new Rsync()
// 	.flags("hvrPtzu")
// 	.set("exclude-from", "./.rsync-ignore")
// 	.source(".")
// 	.destination(distFolder);

mix.sass("./src/scss/style.scss", "./style.css")
.sass("./src/scss/woocommerce/_woocommerce.scss", "./woocommerce.css").sourceMaps();

mix.js("./src/js/scripts.js", "./js/scripts.js").sourceMaps();

// rsync.execute();

mix.browserSync({
	proxy: {
		target: devUrl
	},
	files: ["./style.css", "./js/*.js", "./**/*.php"],
	logLevel: "debug"
});
