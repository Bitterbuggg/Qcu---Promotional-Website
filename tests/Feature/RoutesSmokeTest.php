<?php

namespace Tests\Feature;

use Tests\TestCase;

class RoutesSmokeTest extends TestCase
{
    /** @test */
    public function home_page_loads(): void
    {
        $this->get(route('home'))
            ->assertOk()
            ->assertSee('Welcome to QC LAND');
    }

    /** @test */
    public function about_index_loads(): void
    {
        $this->get(route('about.index'))
            ->assertOk()
            ->assertSee('About QCU');
    }

    /** @test */
    public function about_synopsis_loads(): void
    {
        $this->get(route('about.synopsis'))
            ->assertOk()
            ->assertSee('Game Synopsis');
    }

    /** @test */
    public function about_chapters_loads(): void
    {
        $this->get(route('about.chapters'))
            ->assertOk()
            ->assertSee('Chapter Synopsis');
    }

    /** @test */
    public function about_characters_loads(): void
    {
        $this->get(route('about.characters'))
            ->assertOk()
            ->assertSee('Characters');
    }

    /** @test */
    public function about_map_loads(): void
    {
        $this->get(route('about.map'))
            ->assertOk()
            ->assertSee('QCU Land Map');
    }

    /** @test */
    public function gameplay_index_loads(): void
    {
        $this->get(route('gameplay.index'))
            ->assertOk()
            ->assertSee('Gameplay');
    }

    /** @test */
    public function gameplay_link_loads(): void
    {
        $this->get(route('gameplay.link'))
            ->assertOk()
            ->assertSee('Play the Game');
    }

    /** @test */
    public function gameplay_preview_loads(): void
    {
        $this->get(route('gameplay.preview'))
            ->assertOk()
            ->assertSee('Game Preview');
    }

    /** @test */
    public function gameplay_mechanics_loads(): void
    {
        $this->get(route('gameplay.mechanics'))
            ->assertOk()
            ->assertSee('Game Mechanics');
    }

    /** @test */
    public function news_index_loads(): void
    {
        $this->get(route('news.index'))
            ->assertOk()
            ->assertSee('Announcements');
    }

    /** @test */
    public function news_show_loads(): void
    {
        $this->get(route('news.show', 'an-omen-stirs'))
            ->assertOk()
            ->assertSee('An Omen Stirs');
    }

    /** @test */
    public function team_index_loads(): void
    {
        $this->get(route('team.index'))
            ->assertOk()
            ->assertSee('The Team');
    }
}
