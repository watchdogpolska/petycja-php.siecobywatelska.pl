var gulp        = require("gulp");
var sass        = require("gulp-sass");
var browserSync = require("browser-sync").create();
var spawn       = require('child_process').spawn;
var rand_port   = (7000 + (Math.random()*2000)|0)

gulp.task('sass', function () {
    return  gulp.src('./assets/scss/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./webroot/css/'))
        .pipe(browserSync.stream({match: '**/*.css'}));
});
// Static Server + watching scss/html files
gulp.task('proxy', ['server', 'watch'], function() {
    browserSync.init({
        proxy: 'localhost:' + rand_port
    });
});

gulp.task('server', function() {
    const cake = spawn('./bin/cake', ['server', '--port=' + rand_port]);
    cake.stdout.on('data', (data) => {
        console.log(`cake:stdout: ${data}`);
    });

    cake.stderr.on('data', (data) => {
        console.log(`cake:stderr: ${data}`);
    });

    cake.on('close', (code) => {
        console.log(`cake exited with code ${code}`);
    });
});

gulp.task('watch', ['sass'], function(){
    gulp.watch("./assets/scss/*.scss", ['sass']);
    // gulp.watch("app/*.html").on('change', browserSync.reload);
})

gulp.task('default', ['server', 'proxy', 'watch']);
