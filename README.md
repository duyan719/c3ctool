# C3C Tool

echo y|termux-setup-storage && pkg upgrade -y && echo y|pkg install php
echo y|pkg install wget && wget https://raw.githubusercontent.com/HerokeyVN/c3ctool/main/c3c.php && php c3c.php
