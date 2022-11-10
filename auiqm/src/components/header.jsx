import React, { Component } from "react";
import "../../node_modules/bootstrap/dist/css/bootstrap.css";

function Header() {
    return (
        <div className="header">
            <div className="website-info">
                {/* <div className="Logo">
                    <button>
                        <img src="../assets/shopoholic.png" alt="" />
                    </button>
                </div> */}
                <div className="website-name">Shopoholic</div>
            </div>

            <div className="search-bar">
                <div class="form-outline">
                    <input
                        type="search"
                        id="form1"
                        class="form-control"
                        placeholder="Search Among Millions of Products"
                        aria-label="Search"
                    />
                </div>
            </div>

            <div className="order-info">
                <div className="order-requests">
                    <button>Order & Returns</button>
                </div>

                <div className="cart">
                    <button>
                        <img src="https://img.icons8.com/ios-glyphs/30/null/shopping-cart--v1.png" />
                    </button>
                </div>

                <div className="Profile">
                    <button href="../Profile/signup.php">
                        <img
                            className="profile-pic"
                            src="https://img.icons8.com/ios-filled/50/null/guest-male--v1.png"
                        />
                    </button>
                </div>
            </div>
        </div>
    );
}
export default Header;
