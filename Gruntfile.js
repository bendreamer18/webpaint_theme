module.exports = function(grunt) {
    grunt.initConfig({
        //таск для конвертации less в css
        less: {
            development: {
                options: {
                    //указать, минифицировать ли файл
                    compress: false
                },
                files: {
                    //тут соответственно указать путь где создавать
                    //конвертируемый файл
                    "css/main.css": "css/main.less"
                }
            }
        },
        //таск для отслеживания изменений чего-либо
        watch: {
            //тут пишем за каким типом файлов следить
            less: {
                //тут указываем за какими файлами следить **/**/*.less - означает
                //следить за всеми .less файлами, которые находятся на 2х уровнях
                //вложенности от папки less/
                files: ['styles/**/**/*.less'],
                //какие таски надо выполнить при изменении файлов .less
                tasks: ['less', 'autoprefixer']
            }
        },
        //после того как создали скрипты, их надо объединить и минифицировать
        //для этого используем таск uglify
        // uglify: {
        //     options: {
        //         //нужно ли минифицировать (false) или просто склеить (true)
        //         beautify: false
        //     },
        //     my_target: {
        //         files: {
        //                 //файл на выходе будет main.js, а файлы на входе указываем в
        //                 //массиве по порядку.
        //                 'scripts/new/main.js': [
        //                 'scripts/lib/jquery-2.1.1.min.js',
        //                 'scripts/module.js'
        //             ]
        //         }
        //     }
        // },
        //этот таск из серии postcss, те теперь не нужно будет сразу писать префиксы в css
        //autoprefixer сделает это сам, инфу берет с caniuse.com
        autoprefixer: {
                //указывам файл в котором нужно проставить префиксы, он сам его перезапишит
                no_dest: {
                    src: "css/main.css"
                }
            }
        });
 
    //указываем названия модулей необходимых для работы
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-autoprefixer');
 
    //Здесь указываем какие таски запускать на дефолтный вызов грант (в командной строке пишмем
    //слово grunt и он по дефолту запустит эти таски)
    grunt.registerTask('default', ['less']);
};