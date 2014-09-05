<?php
/**
 * Created by PhpStorm.
 * User: polidog
 * Date: 2014/09/06
 * Time: 3:01
 */

namespace Polidog\EventTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Post
 * @package Polidog\EventTestBundle\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="posts")
 */
class Post {
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    protected $title;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Post
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }
}
