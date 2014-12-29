kohana-doctrine
===============

Kohana 3.3 and 3.2 module to integrate Doctrine ORM 2.4.

Download Doctrine 2 and put it in /vendor:
composer update


License:
--------

[Attribution 3.0 Unported (CC BY 3.0)](http://creativecommons.org/licenses/by/3.0/)

Usage:
--------

in config/doctrine.php

```
'mappings_path'       => APPPATH . 'classes/doctrine/entity',
'mappings_driver'     => 'annotation',
```
Entity in doctrine/entity/ folder

```
<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of Doctrine_Entity_Site
 *
 * @author seyfer
 * @ORM\Entity
 * @ORM\Table(name="sites")
 */
class Doctrine_Entity_Site
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue (strategy="IDENTITY")
     * @ORM\Column(type="integer", nullable=false)
     * @var int
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    protected $name;
}
```

in controller

```
$doctrine_orm  = new Doctrine_ORM;
$entityManager = $doctrine_orm->get_entity_manager();

//EntityManager
Debug::vars(get_class($entityManager));

$site = $entityManager->getRepository("Doctrine_Entity_Site")->find("11");

//Doctrine_Entity_Site
Debug::vars($site);
```

There is also Migrations module <https://github.com/seyfer/kohana-doctrinemigrations>

### You are free:
* to Share — to copy, distribute and transmit the work
* to Remix — to adapt the work

### Under the following conditions:
* Attribution - You must attribute the work in the manner specified by the author or licensor (but not in any way that suggests that they endorse you or your use of the work).