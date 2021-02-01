const
    path = require('path'),
    MiniCssExtractPlugin = require('mini-css-extract-plugin')

module.exports = {
    entry: './src/scripts/index.js',
    output: {
        filename: './scripts/bundle.js',
        path: path.resolve('dist')
    },
    devtool: 'inline-source-map',
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
            }
        ]
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: './styles/style.css'
        })
    ]
}