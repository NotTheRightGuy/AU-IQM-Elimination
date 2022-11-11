import React, { Component } from "react";
import "../items.css";

function Item({ image, title, price, url, rating }) {
    return (
        <div className="items">
            <div className="item-url">{url}</div>
            <div className="item-image">
                <img src={image} alt="" />
            </div>
            <div className="item-info">
                <div className="item-title">{title}</div>
                <div className="item-price">{price}</div>
            </div>
            <div>
                <a href="\src\itemDetails.html">Click to Open Details</a>
            </div>
        </div>
    );
}

export default Item;
