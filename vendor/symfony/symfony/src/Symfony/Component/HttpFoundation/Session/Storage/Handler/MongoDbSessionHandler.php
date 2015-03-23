<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpFoundation\Session\Storage\Handler;

/**
 * MongoDB session handler.
 *
 * @author Markus Bachmann <markus.bachmann@bachi.biz>
 */
class MongoDbSessionHandler implements \SessionHandlerInterface
{
    /**
     * @var \Mongo
     */
    private $mongo;

    /**
     * @var \MongoCollection
     */
    private $collection;

    /**
     * @var array
     */
    private $options;

    /**
     * Constructor.
     *
     * List of available options:
     *  * database: The name of the database [required]
     *  * collection: The name of the collection [required]
     *  * id_field: The field name for storing the session id [default: _id]
     *  * data_field: The field name for storing the session data [default: data]
     *  * time_field: The field name for storing the timestamp [default: time]
<<<<<<< HEAD
     *  * expiry_field: The field name for storing the expiry-timestamp [default: expires_at]
     *
     * It is strongly recommended to put an index on the `expiry_field` for
     * garbage-collection. Alternatively it's possible to automatically expire
     * the sessions in the database as described below:
     *
     * A TTL collections can be used on MongoDB 2.2+ to cleanup expired sessions
     * automatically. Such an index can for example look like this:
     *
     *     db.<session-collection>.ensureIndex(
     *         { "<expiry-field>": 1 },
     *         { "expireAfterSeconds": 0 }
     *     )
     *
     * More details on: http://docs.mongodb.org/manual/tutorial/expire-data/
     *
     * If you use such an index, you can drop `gc_probability` to 0 since
     * no garbage-collection is required.
=======
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
     *
     * @param \Mongo|\MongoClient $mongo   A MongoClient or Mongo instance
     * @param array               $options An associative array of field options
     *
     * @throws \InvalidArgumentException When MongoClient or Mongo instance not provided
     * @throws \InvalidArgumentException When "database" or "collection" not provided
     */
    public function __construct($mongo, array $options)
    {
        if (!($mongo instanceof \MongoClient || $mongo instanceof \Mongo)) {
            throw new \InvalidArgumentException('MongoClient or Mongo instance required');
        }

        if (!isset($options['database']) || !isset($options['collection'])) {
            throw new \InvalidArgumentException('You must provide the "database" and "collection" option for MongoDBSessionHandler');
        }

        $this->mongo = $mongo;

        $this->options = array_merge(array(
            'id_field' => '_id',
            'data_field' => 'data',
            'time_field' => 'time',
<<<<<<< HEAD
            'expiry_field' => 'expires_at',
=======
            'expiry_field' => false,
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
        ), $options);
    }

    /**
     * {@inheritdoc}
     */
    public function open($savePath, $sessionName)
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function close()
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function destroy($sessionId)
    {
        $this->getCollection()->remove(array(
            $this->options['id_field'] => $sessionId,
        ));

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function gc($maxlifetime)
    {
<<<<<<< HEAD
        $this->getCollection()->remove(array(
            $this->options['expiry_field'] => array('$lt' => new \MongoDate()),
=======
        /* Note: MongoDB 2.2+ supports TTL collections, which may be used in
         * place of this method by indexing the "time_field" field with an
         * "expireAfterSeconds" option. Regardless of whether TTL collections
         * are used, consider indexing this field to make the remove query more
         * efficient.
         *
         * See: http://docs.mongodb.org/manual/tutorial/expire-data/
         */
        if (false !== $this->options['expiry_field']) {
            return true;
        }
        $time = new \MongoDate(time() - $maxlifetime);

        $this->getCollection()->remove(array(
            $this->options['time_field'] => array('$lt' => $time),
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
        ));

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function write($sessionId, $data)
    {
<<<<<<< HEAD
        $expiry = new \MongoDate(time() + (int) ini_get('session.gc_maxlifetime'));

        $fields = array(
            $this->options['data_field'] => new \MongoBinData($data, \MongoBinData::BYTE_ARRAY),
            $this->options['time_field'] => new \MongoDate(),
            $this->options['expiry_field'] => $expiry,
        );

=======
        $fields = array(
            $this->options['data_field'] => new \MongoBinData($data, \MongoBinData::BYTE_ARRAY),
            $this->options['time_field'] => new \MongoDate(),
        );

        /* Note: As discussed in the gc method of this class. You can utilise
         * TTL collections in MongoDB 2.2+
         * We are setting the "expiry_field" as part of the write operation here
         * You will need to create the index on your collection that expires documents
         * at that time
         * e.g.
         * db.MySessionCollection.ensureIndex( { "expireAt": 1 }, { expireAfterSeconds: 0 } )
         */
        if (false !== $this->options['expiry_field']) {
            $expiry = new \MongoDate(time() + (int) ini_get('session.gc_maxlifetime'));
            $fields[$this->options['expiry_field']] = $expiry;
        }

>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
        $this->getCollection()->update(
            array($this->options['id_field'] => $sessionId),
            array('$set' => $fields),
            array('upsert' => true, 'multiple' => false)
        );

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function read($sessionId)
    {
        $dbData = $this->getCollection()->findOne(array(
<<<<<<< HEAD
            $this->options['id_field']   => $sessionId,
            $this->options['expiry_field'] => array('$gte' => new \MongoDate()),
=======
            $this->options['id_field'] => $sessionId,
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
        ));

        return null === $dbData ? '' : $dbData[$this->options['data_field']]->bin;
    }

    /**
     * Return a "MongoCollection" instance.
     *
     * @return \MongoCollection
     */
    private function getCollection()
    {
        if (null === $this->collection) {
            $this->collection = $this->mongo->selectCollection($this->options['database'], $this->options['collection']);
        }

        return $this->collection;
    }

    /**
     * Return a Mongo instance
     *
     * @return \Mongo
     */
    protected function getMongo()
    {
        return $this->mongo;
    }
}
