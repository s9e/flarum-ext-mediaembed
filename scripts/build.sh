#!/bin/bash

rm -rf /tmp/s9e-mediaembed
mkdir /tmp/s9e-mediaembed

cd "$(dirname $(dirname $0))"
cp bootstrap.php composer.json LICENSE /tmp/s9e-mediaembed

cd /tmp
kzip -r -y s9e-mediaembed-$1.zip s9e-mediaembed