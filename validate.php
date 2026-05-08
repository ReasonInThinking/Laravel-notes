<?php 
public function carHandler(Request $request) {
        $request->validate([
            'car-band' => 'required|min:2',
            'car-year' => 'required|numeric|digits:4',
        ]); 
}
