<?php 
    function getDataValidation($_request){
        return $_request->validate([
            'title' => 'required|string|max:100',
            'thumb' => 'nullable|string',
            'price' => 'required|numeric|between:0,9999.99',
            'series' => 'required|string|max:50',
            'sale_date' => 'required|date',
            'type' => 'required|string|max:40',
            'description' => 'nullable|string'
        ]);
    }