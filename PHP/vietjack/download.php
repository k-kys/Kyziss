<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    #!/usr/bin/perl

# phần HTTP Header
print "Content-Type:application/octet-stream; name=\"FileName\"\r\n";
print "Content-Disposition: attachment; filename=\"FileName\"\r\n\n";

# Nội dung thực sự của file
open( FILE, "<FileName" );

while(read(FILE, $buffer, 100) )
{
   print("$buffer");
}
    ?>
</body>
</html>
