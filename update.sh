cp -a ../tui/room php
rm php/room/test*.php
rm php/room/daydream.php

cp -a ../tui/css html
unlink html/css/jquery-ui.min.css
cp -a ../tui/js/ html

mkdir download
cd download
for p in ../php/room/*.php; do r=`echo "$p"|sed -s "s#../php#http://wopr/tui#"`; wget -q -k $r; done;
rm ui.php
for p in *.php; do mv "$p" "`echo \"$p\"|sed -s 's#\.php$#.html#'`"; done;
cd ..

rm html/room/*
mv download/* html/room/
rm -r download

for h in html/room/*.html
    do b=`basename "$h"`
    p=`echo "$b"|sed -s 's#\.html$#.png#'`
    if [ ! -e "screenshots/$p" ]
        then echo "$p is missing"
    fi
done

for p in screenshots/*.png
    do convert -resize 400x400 "$p" "screenshots/small/`basename $p`"
done
