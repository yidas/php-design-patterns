/**
 * Implement by ReflectionClass::getFileName
 * @see https://secure.php.net/manual/en/reflectionclass.getfilename.php
 */
class Parent  
{
    protected function getCallerDir() 
    {
        $rc = new ReflectionClass($this);
        return dirname($rc->getFileName());
    }
}

// Defined in another directory
class Child extends Parent
{
    
}

// Controller
$obj = new Child();
echo obj->getCallerDir();
