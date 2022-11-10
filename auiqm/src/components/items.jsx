import React, { Component } from "react";
import "../items.css";

function Item({ image, title, price, reviews, ratings }) {
    return (
        <div className="items">
            <div className="item-image">{image}</div>
            <div className="item-info">
                <div className="item-title">{title}</div>
                <div className="item-price">{price}</div>
                <div className="item-reviews">{reviews}</div>
                <div className="item-rating">{ratings}</div>
            </div>
        </div>
    );
}

export default Item;
