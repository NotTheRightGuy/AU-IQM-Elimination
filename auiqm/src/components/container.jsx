import React, { Component } from "react";
import Item from "./items";

function Container() {
    return (
        <div className="container">
            <Item
                image="image"
                title="title"
                price="price"
                reviews="reviews"
                ratings="ratings"
            />
            <Item
                image="image"
                title="title"
                price="price"
                reviews="reviews"
                ratings="ratings"
            />
            <Item
                image="image"
                title="title"
                price="price"
                reviews="reviews"
                ratings="ratings"
            />
            <Item
                image="image"
                title="title"
                price="price"
                reviews="reviews"
                ratings="ratings"
            />
        </div>
    );
}

export default Container;
