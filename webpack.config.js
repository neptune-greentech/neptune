const
	path = require('path'),
	MiniCssExtractPlugin = require('mini-css-extract-plugin')

var config = {
	mode: 'production',
	module: {
		rules: [
			{
				test: /\.s(a|c)ss$/,
				use: [
					{
						loader: MiniCssExtractPlugin.loader,
						options: {
							publicPath: '../'
						}
					},
					'css-loader',
					'postcss-loader',
					'sass-loader'
				]
			},
			{
				test: /\.(jsx|js)$/,
				exclude: /node_modules/,
				loader: 'babel-loader',
				options: {
					presets: ['@babel/preset-env', '@babel/preset-react']
				}
			},
		],
	},
	resolve: {
		extensions: ["*", ".js", ".jsx"]
	},
};

var configGeneral = Object.assign({}, config, {
	name: "configGeneral",
	entry: './src/scripts/index.js',
	output: {
		filename: './scripts/bundle.js',
		path: path.resolve('dist')
	},
	devtool: 'inline-source-map',

	plugins: [
		new MiniCssExtractPlugin({
			filename: './styles/style.css'
		})
	]
});

var customCta = Object.assign({}, config, {
	name: "customCta",
	entry: './src/scripts/editor/customCta.js',
	output: {
		filename: './scripts/editor/customCta.js',
		path: path.resolve('dist')
	},
	plugins: [
		new MiniCssExtractPlugin({
			filename: './styles/editor/customCta.css'
		})
	]
});

var heroFull = Object.assign({}, config, {
	name: "heroFull",
	entry: './src/scripts/editor/heroFull.js',
	output: {
		filename: './scripts/editor/heroFull.js',
		path: path.resolve('dist')
	},
	plugins: [
		new MiniCssExtractPlugin({
			filename: './styles/editor/heroFull.css'
		})
	]
});

var heroClassic = Object.assign({}, config, {
	name: "heroClassic",
	entry: './src/scripts/editor/heroClassic.js',
	output: {
		filename: './scripts/editor/heroClassic.js',
		path: path.resolve('dist')
	},
	plugins: [
		new MiniCssExtractPlugin({
			filename: './styles/editor/heroClassic.css'
		})
	]
});

module.exports = [
	configGeneral,
	customCta,
	heroFull,
	heroClassic
];