<?php
// Constants cannot be changed once they are defined

/* Class constants can be useful if you need to define a
constant that is only available within a class

A class constant is declared with the const keyword,

Class constants are declared in the same way as normal constants,
except for the fact that they must be declared inside a class.
Class constant are case-sensitive by default.

Class constants can be accessed from outside the class using the
class name, double colon (::) and the constant name.
 */

class FlashMessages
{
    const created = "your product added successfully";
    const edited = "your product edited successfully";
    const deleted = "your product deleted successfully";
    const error = "something went wrong";

}
