属性标签

search:

    /\*\*([\s\w\*\.\@\/\$\|\\\"\(\)\:\'\{\}]+)(protected \$|public \$)(\w+)
replace:

    <hr id="\$$3">
    /**$1$2$3


方法标签

search:

    /\*\*([\s\w\*\.\@\/\$\|\\\"\(\)\:\'\{\}]+)function (.+)\(
replace:

    <hr id="$2">
    /**$1function $2(