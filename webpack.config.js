const webpack = require('webpack');
const path = require('path');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const OptimizeCssAssetsPlugin = require('optimize-css-assets-webpack-plugin');


const localDevUrl = 'http://localhost/royallock';

const __buildPath = './wp-content/themes/royal-lock/';
const __srcPath = './src/';

const env = process.env.NODE_ENV

const config = {
   mode: env || 'development'
}

module.exports = {
	entry: {
		styles: __srcPath + 'scss/scss-entry.js',
		scriptsHome: __srcPath + 'js/scripts-entry.js',
	},
	output: {
		path: path.resolve( __buildPath, 'build' ),
		filename: '[name].bundle.js',
    },
    
	// devServer: {
	// 	contentBase: path.join(__dirname, "./build"),
	// 	port: 9000,
    // },
    
	module: {
		rules: [
			{
				// Compile js
				test: /\js$/,
				exclude: /(node_modules)/,
				loader: 'babel-loader',
				query: {
					presets: [ 'es2015', 'stage-1' ]
				}
            },
			{
				// Compile SCSS files
				test: /\.s?[ac]ss$/,
				use: [
					//config.mode === 'production' ? MiniCssExtractPlugin.loader : "style-loader",
					// "style-loader",
					MiniCssExtractPlugin.loader,
					// "postcss-loader",
                    "css-loader", // translates CSS into CommonJS
                    "sass-loader" // compiles Sass to CSS
                ]
            },
			{
				// Compile Images and Icons
				test: /\.(png|svg|jpg|gif)$/,
				use: [ 'file-loader' ]
				},
			{
				// Compile Fonts
				test: /\.(woff|woff2|eot|ttf|otf)$/,
				use: [ 'file-loader' ]
			}
		]
	},
	plugins: [
		new MiniCssExtractPlugin({
			path: path.resolve( __buildPath, 'build' ),
			filename: "styles.min.css"
		}),
		new BrowserSyncPlugin({
			host: 'localhost',
			port: '3030',
			proxy: localDevUrl,
			files: [ __buildPath + '*.css', __buildPath + '*.js' ],
			notify: true,
			reloadDelay: 200,
			injectChanges: false,
			logFileChanges: false
		})
	],
}