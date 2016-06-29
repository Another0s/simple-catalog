<?php

use yii\db\Migration;

/**
 * Handles the creation for table `tables`.
 */
class m160627_224911_create_tables extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $tableOptions = null;

        if($this->db->driverName == 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable('film', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'poster' => $this->string()->notNull(),
            'description' => $this->text()->notNull(),
            'release_at' => $this->dateTime(),
            'producer' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->createTable('producer', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
        ], $tableOptions);

        $this->createTable('genre', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
        ], $tableOptions);

        $this->createTable('film_genre', [
            'id' => $this->primaryKey(),
            'film' => $this->integer()->notNull(),
            'genre' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->createIndex('idx-film_genre-film', 'film_genre', 'film');
        $this->createIndex('idx-film_genre-genre', 'film_genre', 'genre');

        $this->addForeignKey('fk-film_genre-film', 'film_genre', 'film', 'film', 'id', 'CASCADE');
        $this->addForeignKey('fk-film_genre-genre', 'film_genre', 'genre', 'genre', 'id', 'CASCADE');

        $this->createIndex('idx-film-producer', 'film', 'producer');
        $this->addForeignKey('fk-film-producer', 'film', 'producer', 'producer', 'id', 'CASCADE');
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-film_genre-film', 'film_genre');
        $this->dropForeignKey('fk-film_genre-genre', 'film_genre');

        $this->dropIndex('idx-film_genre-film', 'film_genre');
        $this->dropIndex('idx-film_genre-genre', 'film_genre');

        $this->dropForeignKey('fk-film-producer', 'film');
        $this->dropIndex('idx-film-producer', 'film');

        $this->dropTable('film');
        $this->dropTable('producer');
        $this->dropTable('genre');

    }
}
