#!/bin/bash

my_sourcetree_dir="/var/www/sourcetree";
export_php="${my_sourcetree_dir}/export.php"
export_dir="${my_sourcetree_dir}/output"
source_files=$*
rm -rf $export_dir
mkdir -p $export_dir
/usr/local/opt/php@7.1/bin/php $export_php $source_files
open $my_sourcetree_dir
