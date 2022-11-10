import React, { Component } from "react";
import "../items.css";

function Item() {
    return (
        <div className="items">
            <div className="item-image">Image</div>
            <div className="item-info">
                <div className="item-title">Title</div>
                <div className="item-price">Price</div>
                <div className="item-reviews">Reviews</div>
                <div className="item-rating">Ratings</div>
            </div>
        </div>
    );
}

export default Item;
