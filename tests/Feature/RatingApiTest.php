<?php

namespace Modules\Rating\Tests\Feature;

use Modules\Rating\Tests\TestCase;
use Modules\Rating\Models\Rating;
use Modules\Rating\Models\RatingMorph;
<<<<<<< HEAD
use Illuminate\Foundation\Testing\RefreshDatabase;
=======
>>>>>>> ade9b58 (.)
use Illuminate\Foundation\Testing\WithFaker;

class RatingApiTest extends TestCase
{
<<<<<<< HEAD
    use RefreshDatabase, WithFaker;
=======
>>>>>>> ade9b58 (.)

    public function test_can_list_ratings(): void
    {
        Rating::create([
<<<<<<< HEAD
            'title' => 'Test Rating 1',
            'value' => 5
        ]);

        Rating::create([
            'title' => 'Test Rating 2',
            'value' => 4
=======
            'name' => 'Test Rating 1',
        ]);

        Rating::create([
            'name' => 'Test Rating 2',
>>>>>>> ade9b58 (.)
        ]);

        $response = $this->getJson('/api/ratings');

        $response->assertStatus(200)
            ->assertJsonCount(2, 'data')
            ->assertJsonStructure([
                'data' => [
                    '*' => [
                        'id',
<<<<<<< HEAD
                        'title',
                        'value',
=======
                        'name',
>>>>>>> ade9b58 (.)
                        'created_at',
                        'updated_at'
                    ]
                ]
            ]);
    }

    public function test_can_create_rating(): void
    {
        $data = [
<<<<<<< HEAD
            'title' => 'New Rating',
            'value' => 5,
            'color' => '#00FF00',
            'icon' => 'star',
            'rule' => 'test',
            'txt' => 'Test description'
=======
            'name' => 'New Rating',
            'color' => '#00FF00',
>>>>>>> ade9b58 (.)
        ];

        $response = $this->postJson('/api/ratings', $data);

        $response->assertStatus(201)
            ->assertJson([
                'data' => [
<<<<<<< HEAD
                    'title' => 'New Rating',
                    'value' => 5
=======
                    'name' => 'New Rating',
>>>>>>> ade9b58 (.)
                ]
            ]);
    }

    public function test_can_update_rating(): void
    {
        $rating = Rating::create([
<<<<<<< HEAD
            'title' => 'Test Rating',
            'value' => 5
        ]);

        $data = [
            'title' => 'Updated Rating',
            'value' => 4
=======
            'name' => 'Test Rating',
        ]);

        $data = [
            'name' => 'Updated Rating',
>>>>>>> ade9b58 (.)
        ];

        $response = $this->putJson("/api/ratings/{$rating->id}", $data);

        $response->assertStatus(200)
            ->assertJson([
                'data' => [
<<<<<<< HEAD
                    'title' => 'Updated Rating',
                    'value' => 4
=======
                    'name' => 'Updated Rating',
>>>>>>> ade9b58 (.)
                ]
            ]);
    }

    public function test_can_delete_rating(): void
    {
        $rating = Rating::create([
<<<<<<< HEAD
            'title' => 'Test Rating',
            'value' => 5
=======
            'name' => 'Test Rating',
>>>>>>> ade9b58 (.)
        ]);

        $response = $this->deleteJson("/api/ratings/{$rating->id}");

        $response->assertStatus(204);
        $this->assertDatabaseMissing('ratings', ['id' => $rating->id]);
    }

    public function test_can_rate_model(): void
    {
        $rating = Rating::create([
<<<<<<< HEAD
            'title' => 'Test Rating',
            'value' => 5
=======
            'name' => 'Test Rating',
>>>>>>> ade9b58 (.)
        ]);

        $data = [
            'model_type' => 'test_model',
            'model_id' => 1,
            'value' => 4.5,
            'note' => 'Great!'
        ];

        $response = $this->postJson("/api/ratings/{$rating->id}/rate", $data);

        $response->assertStatus(201)
            ->assertJson([
                'data' => [
                    'rating_id' => $rating->id,
                    'value' => 4.5,
                    'note' => 'Great!'
                ]
            ]);
    }
} 