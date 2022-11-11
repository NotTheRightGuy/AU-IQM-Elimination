import React, { Component } from "react";
import "../../node_modules/bootstrap/dist/css/bootstrap.css";

function Search() {
    return (
        <div class="input-group">
            <input
                type="search"
                class="form-control rounded"
                placeholder="Search"
                aria-label="Search"
                aria-describedby="search-addon"
            />
            <button type="button" class="btn btn-primary">
                search
            </button>
        </div>
    );
}

export default Search;
