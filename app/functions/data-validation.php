<?php 
    function getDataValidation($_request){
        return $_request->validate([
            'title' => 'required|string|max:100',
            'thumb' => 'nullable|string|url|max:255',
            'price' => 'required|numeric|between:0,9999.99',
            'series' => 'required|string|max:50',
            'sale_date' => 'required|date|after_or_equal:01/01/1930',
            'type' => 'required|string|max:40',
            'description' => 'nullable|string'
        ]);
    }