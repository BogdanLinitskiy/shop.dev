<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
            [
                'title' => 'NASA Wants to Build a Super Quiet Supersonic Jet',
                'alias' => 'nasa_wants_to_build_a_super_quiet_supersonic_jet',
                'intro' => 'A very quiet plane could be coming very fast.',
                'content' => 'The recent 2019 NASA budget request was, as Live Science sister site Space.com reported,
                 light on science and funding for the International Space Station but heavy on commercialization and space exploration. In this proposed budget, President Donald Trump\'s
                 administration also announced its intention to fully fund a new experimental supersonic airplane.
The aircraft, the latest addition to the X-series dating back to Chuck Yeager\'s sound-barrier-breaking craft, the X-1, will be designed to be much quieter than previous faster-than-sound jets.',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'title' => '6 Simple Machines: Making Work Easier',
                'alias' => 'simple_machines_making_work_easier',
                'intro' => 'Throughout history, humans have developed several devices to make work easier.',
                'content' => 'Throughout history, humans have developed several devices to make work easier.
                 The most notable of these are known as the "six simple machines": the wheel and axle, the lever,
                  the inclined plane, the pulley, the screw, and the wedge, although the latter three are actually just extensions
                   or combinations of the first three.
                   Because work is defined as force acting on an object in the direction of motion,
                    a machine makes work easier to perform by accomplishing one or more of the following functions,
                     according to Jefferson Lab',
                'created_at' => date("Y-m-d H:i:s")
            ]
        ]);
    }
}
