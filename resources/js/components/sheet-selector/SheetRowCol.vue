<template>
    <div class="w-full grid grid-cols-12 text-center">
        <div class="col-span-2 md:col-span-1 h-12 bg-transparent">
        </div>
        <div class="col-span-9 md:col-span-11 h-12 bg-gray-100">
            <ul class="flex overflow-x-auto rounded">
                <li class="flex-shrink-0 hover:bg-gray-200 w-12 p-2 border-x cursor-pointer"
                    @click="selectCol(item)"
                    :class="col === item ? 'bg-gray-300 border-gray-300' : ''"
                    v-for="item in cols" :key="item">
                    {{ item }}
                </li>
            </ul>
        </div>
        <div class="col-span-2 md:col-span-1 h-64 bg-gray-100">
            <ul class="flex flex-col h-full overflow-y-auto rounded">
                <li class="flex hover:bg-gray-200 p-2 border-y cursor-pointer"
                    @click="selectRow(item)"
                    :class="row === item ? 'bg-gray-300 border-gray-300' : ''"
                    v-for="item in rows" :key="item">
                    {{ item }}
                </li>
            </ul>
        </div>
        <div class="col-span-9 md:col-span-11 h-full flex justify-center items-center">
            <span class="text-5xl md:text-9xl text-gray-400"> {{ col + row }} </span>
        </div>
    </div>
</template>

<script>
export default {
    name: 'SheetRowCol',

    data: () => ({
        col: '',
        row: '',
        cols: [
            'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'
        ],
        rows: [
            '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20'
        ],
    }),

    methods: {
        selectRow: function(data) {
            this.row = data
            this.cellUpdated()
        },
        selectCol: function(data) {
            this.col = data
            this.cellUpdated()
        },
        cellUpdated: function() {
            if(this.col !== '' && this.row !== '') {
                this.$emit("cell-selected", this.col + this.row);
            }
        }
    }
}
</script>