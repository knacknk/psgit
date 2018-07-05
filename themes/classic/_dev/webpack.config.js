// /**
//  * 2007-2017 PrestaShop
//  *
//  * NOTICE OF LICENSE
//  *
//  * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
//  * that is bundled with this package in the file LICENSE.txt.
//  * It is also available through the world-wide-web at this URL:
//  * https://opensource.org/licenses/AFL-3.0
//  * If you did not receive a copy of the license and are unable to
//  * obtain it through the world-wide-web, please send an email
//  * to license@prestashop.com so we can send you a copy immediately.
//  *
//  * DISCLAIMER
//  *
//  * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
//  * versions in the future. If you wish to customize PrestaShop for your
//  * needs please refer to http://www.prestashop.com for more information.
//  *
//  * @author    PrestaShop SA <contact@prestashop.com>
//  * @copyright 2007-2017 PrestaShop SA
//  * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
//  * International Registered Trademark & Property of PrestaShop SA
//  */
// const webpack = require('webpack');
// const path = require('path');
// const ExtractTextPlugin = require("extract-text-webpack-plugin");
//
// const CssoWebpackPlugin = require('csso-webpack-plugin').default;
// const GoogleFontsPlugin = require("google-fonts-webpack-plugin");
//
//
// let config = {
//   entry: {
//     main: [
//       './js/theme.js',
//       './css/theme.scss'
//     ]
//   },
//   output: {
//     path: path.resolve(__dirname, '../assets/js'),
//     filename: 'theme.js'
//   },
//   module: {
//     loaders: [
//       {
//         test: /\.scss$/,
//         loaders: [ 'style', 'css?sourceMap', 'sass?sourceMap' ]
//       }
//     ],
//     rules: [
//       {
//         test: /\.js/,
//         loader: 'babel-loader'
//       },
//       {
//         test: /\.(scss|css)$/,
//         use: ExtractTextPlugin.extract({
//           fallback: 'style-loader',
//           use: [
//             {
//               loader: 'css-loader',
//
//               query: {
//                 modules: false,
//                 sourceMap: true,
//                 importLoaders: 2
//               }
//
//               // options: {
//               //   minimize: true,
//               //   sourceMap: true
//               // }
//             },
//             {
//               loader: 'postcss-loader', options: {sourceMap: 'inline'}
//             },
//             {
//               loader: 'sass-loader',
//               query: {
//                 sourceMap: true,
//                 sourceMapContents: true
//               }
//               //options: { sourceMap: true }
//             }
//           ]
//         })
//       },
//       {
//         test: /.(jpg|jpeg|png|woff(2)?|eot|ttf|svg)(\?[a-z0-9=\.]+)?$/,
//         use: [
//           {
//             loader: 'file-loader',
//             options: {
//               name: '../css/[hash].[ext]'
//             }
//           }
//         ]
//       },
//       {
//         test : /\.css$/,
//         use: ['style-loader', 'css-loader', 'postcss-loader']
//       }
//     ]
//   },
//   externals: {
//     prestashop: 'prestashop',
//     $: '$',
//     jquery: 'jQuery'
//   },
//   plugins: [
//     new GoogleFontsPlugin({
//       fonts: [
//         { family: "Heebo", variants: ["100", "400", "500", "700", "800"]},
//       ],
//
//     }),
//     new ExtractTextPlugin(path.join('..', 'css', 'theme.css')),
//     new CssoWebpackPlugin(),
//   ]
// };
//
// config.plugins.push(
//     new webpack.optimize.UglifyJsPlugin({
//       sourceMap: true,
//       compress: {
//         sequences: true,
//         conditionals: true,
//         booleans: true,
//         if_return: true,
//         join_vars: true,
//         drop_console: false
//       },
//       output: {
//         comments: false
//       },
//       minimize: true
//     })
// );
//
// module.exports = config;

/**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */
const webpack = require('webpack');
const path = require('path');
const ExtractTextPlugin = require("extract-text-webpack-plugin");

let config = {
  entry: {
    main: [
      './js/theme.js',
      './css/theme.scss'
    ]
  },
  output: {
    path: path.resolve(__dirname, '../assets/js'),
    filename: 'theme.js'
  },
  module: {
    loaders: [
      {
        test: /\.scss$/,
        loaders: [ 'style', 'css?sourceMap', 'sass?sourceMap' ]
      }
    ],
    rules: [
      {
        test: /\.js/,
        loader: 'babel-loader'
      },
      {
        test: /\.(scss|css)$/,
        use: ExtractTextPlugin.extract({
          fallback: 'style-loader',
          use: [
            {
              loader: 'css-loader',

              query: {
                modules: false,
                sourceMap: true,
                importLoaders: 2
              }

              // options: {
              //   minimize: true,
              //   sourceMap: true
              // }
            },
            {
              loader: 'postcss-loader', options: {sourceMap: 'inline'}
            },
            {
              loader: 'sass-loader',
              query: {
                sourceMap: true,
                sourceMapContents: true
              }
              //options: { sourceMap: true }
            }
          ]
        })
      },
      {
        test: /.(jpg|jpeg|png|woff(2)?|eot|ttf|svg)(\?[a-z0-9=\.]+)?$/,
        use: [
          {
            loader: 'file-loader',
            options: {
              name: '../css/[hash].[ext]'
            }
          }
        ]
      },
      {
        test : /\.css$/,
        use: ['style-loader', 'css-loader', 'postcss-loader']
      }
    ]
  },
  externals: {
    prestashop: 'prestashop',
    $: '$',
    jquery: 'jQuery'
  },
  plugins: [
    new ExtractTextPlugin(path.join('..', 'css', 'theme.css'))
  ]
};

config.plugins.push(
    new webpack.optimize.UglifyJsPlugin({
      sourceMap: true,
      compress: {
        sequences: true,
        conditionals: true,
        booleans: true,
        if_return: true,
        join_vars: true,
        drop_console: false
      },
      output: {
        comments: false
      },
      minimize: true
    })
);

module.exports = config;

