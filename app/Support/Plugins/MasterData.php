<?php

namespace Vanguard\Support\Plugins;

use Vanguard\Plugins\Plugin;
use Vanguard\Support\Sidebar\Item;

class MasterData extends Plugin
{
    public function sidebar()
    {
        $cars = Item::create(__('Cars'))
            ->route('cars.index')
            ->active('master-data/cars*')
            ->permissions('master-data.manage');

        $mechanics = Item::create(__('Mechanics'))
            ->route('mechanics.index')
            ->active('master-data/mechanics*')
            ->permissions('master-data.manage');

        $skills = Item::create(__('Skills'))
            ->route('skills.index')
            ->active('master-data/skills*')
            ->permissions('master-data.manage');

        return Item::create(__('Master Data'))
            ->href('#master-data-dropdown')
            ->icon('fas fa-database')
            ->permissions(['master-data.manage'])
            ->addChildren([
                $cars,
                $mechanics,
                $skills
            ]);
    }
}
