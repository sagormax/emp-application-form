var gulp        = require("gulp");
var concat      = require("gulp-concat");
var uglify      = require("gulp-uglify");
var sass        = require("gulp-sass");
var browserSync = require("browser-sync").create();

gulp.task("style", function() {
  return gulp
    .src(["scss/**/*.scss"])
    .pipe(sass()) // Converts Sass to CSS with gulp-sass
    .pipe(gulp.dest("css"))
    .pipe(
      browserSync.reload({
        stream: true
      })
    );
});

gulp.task("html", function() {
  browserSync.reload({
    stream: true
  });
});

gulp.task("watch", function() {
  browserSync.init({
    server: {
      baseDir: "./"
    }
  });

  gulp.watch("scss/**/*.scss", gulp.series("style"));

  gulp.watch("./*.html").on('change', browserSync.reload);
});
