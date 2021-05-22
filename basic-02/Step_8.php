<?php 
function Log2($x)
{
    return (log10($x) / 
            log10(2));
}
  
function isPowerOfTwo($n)
{
    return (ceil(Log2($n)) == 
            floor(Log2($n)));
}
  
// Driver Code
if(isPowerOfTwo(4))
echo "Yes\n";
else
echo "No\n";
  
?>