<template>
    <div class="container">
        <div class="row" style="margin-top:50px !important;">
            <div class="col l6">
                <nav class="white " >
                    <div class="nav-wrapper">
                        <form>
                            <div class="input-field">
                                <input id="search" type="search" required placeholder="Search">
                                <label class="label-icon" for="search">
                                    <i class="material-icons">search</i>
                                </label>
                                <i class="material-icons">close</i>
                            </div>
                        </form>
                    </div>
                </nav>
            </div>
            <div class="col l6">
                <div class="btn">New </div>
            </div>
        </div>
        <!-- Row ends -->
        <div class="card-panel">

            <table class="bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Alvin
                            <i class="material-icons right red-text text-lighten-2">delete</i>
                            <i class="material-icons right">edit</i>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
        <!-- Card panel ends -->
    </div>
    <!-- Container ends -->
</template>