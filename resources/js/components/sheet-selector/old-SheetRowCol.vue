<template>
    <div>
        <div class="relative rounded-xl overflow-auto">
            <div class="mx-4 bg-white border overflow-hidden">
                <div class="overflow-scroll grid grid-cols-[70px,repeat(26,150px)] grid-rows-[auto,repeat(16,50px)] max-h-[350px]">
                    <div class="row-start-[1] col-start-[1] sticky top-0 z-10 bg-white border-gray-200 border-b text-center py-2"></div>
                    
                    <div v-for="(item, index) in cols" :key="item"
                        class="row-start-[1] sticky top-0 z-10 border-gray-200 border-b py-2 text-center"
                        :class="col === item ? 'bg-main-600 text-white col-start-['+(index+2)+'] ' : 'col-start-['+(index+2)+'] bg-white'">
                        {{item}}
                    </div>
                    <!-- <div v-for="(item, index) in cols" :key="index">
                        {{ index }} : {{ item }}
                    </div> -->
                    <!-- <div class="row-start-[1] col-start-[2] sticky top-0 z-10 bg-white border-gray-200 border-b py-2 text-center">
                        Sun
                    </div>
                    <div class="row-start-[1] col-start-[3] sticky top-0 z-10 bg-white border-gray-200 border-b py-2 text-center">
                        Mon
                    </div>
                    <div class="row-start-[1] col-start-[4] sticky top-0 z-10 bg-white border-gray-200 border-b py-2 text-center">
                        Tue
                    </div>
                    <div class="row-start-[1] col-start-[5] sticky top-0 z-10 bg-white border-gray-200 border-b py-2 text-center">
                        Wed
                    </div>
                    <div class="row-start-[1] col-start-[6] sticky top-0 z-10 bg-white border-gray-200 border-b py-2 text-center">
                        Thu
                    </div>
                    <div class="row-start-[1] col-start-[7] sticky top-0 z-10 bg-white border-gray-200 border-b py-2 text-center">
                        Fri
                    </div>
                    <div class="row-start-[1] col-start-[8] sticky top-0 z-10 bg-white border-gray-200 border-b py-2 text-center">
                        Sat
                    </div> -->
                    <div class="row-start-[2] col-start-[1] border-gray-200 border-r p-1.5 text-right uppercase sticky left-0"
                        :class="row === 1 ? 'bg-main-600 text-white' : 'bg-white'">
                        1
                    </div>
                    <div v-for="(item, index) in cols" :key="item"
                        @click="selectedCell(item, 1)"
                        :class="'row-start-[2] col-start-['+(index+2)+'] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100'"></div>
                    
                    <div class="row-start-[3] col-start-[1] border-gray-200 border-r p-1.5 text-right uppercase sticky left-0"
                        :class="row === 2 ? 'bg-main-600 text-white' : 'bg-white'">
                        2
                    </div>
                    <div v-for="(item, index) in cols" :key="item"
                        @click="selectedCell(item, 2)"
                        :class="'row-start-[3] col-start-['+(index+2)+'] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100'"></div>
                    
                    <div class="row-start-[4] col-start-[1] border-gray-200 border-r p-1.5 text-right uppercase sticky left-0"
                        :class="row === 3 ? 'bg-main-600 text-white' : 'bg-white'">
                        3
                    </div>
                    <div v-for="(item, index) in cols" :key="item"
                        @click="selectedCell(item, 3)"
                        :class="'row-start-[4] col-start-['+(index+2)+'] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100'"></div>
                    
                    <div class="row-start-[5] col-start-[1] border-gray-200 border-r p-1.5 text-right uppercase sticky left-0"
                        :class="row === 4 ? 'bg-main-600 text-white' : 'bg-white'">
                        4
                    </div>
                    <div v-for="(item, index) in cols" :key="item"
                        @click="selectedCell(item, 4)"
                        :class="'row-start-[5] col-start-['+(index+2)+'] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100'"></div>
                    <!-- <div class="row-start-[5] col-start-[2] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[5] col-start-[3] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[5] col-start-[4] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[5] col-start-[5] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[5] col-start-[6] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[5] col-start-[7] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[5] col-start-[8] border-gray-200 border-b"></div> -->
                    
                    <div class="row-start-[6] col-start-[1] border-gray-200 border-r p-1.5 text-right uppercase sticky left-0"
                        :class="row === 5 ? 'bg-main-600 text-white' : 'bg-white'">
                        5
                    </div>
                    <div v-for="(item, index) in cols" :key="item"
                        @click="selectedCell(item, 5)"
                        :class="'row-start-[6] col-start-['+(index+2)+'] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100'"></div>
                    <!-- <div class="row-start-[6] col-start-[2] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[6] col-start-[3] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[6] col-start-[4] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[6] col-start-[5] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[6] col-start-[6] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[6] col-start-[7] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[6] col-start-[8] border-gray-200 border-b"></div> -->
                    
                    <div class="row-start-[7] col-start-[1] border-gray-200 border-r p-1.5 text-right uppercase sticky left-0"
                        :class="row === 6 ? 'bg-main-600 text-white' : 'bg-white'">
                        6
                    </div>
                    <div v-for="(item, index) in cols" :key="item"
                        @click="selectedCell(item, 6)"
                        :class="'row-start-[7] col-start-['+(index+2)+'] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100'"></div>
                    <!-- <div class="row-start-[7] col-start-[2] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[7] col-start-[3] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[7] col-start-[4] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[7] col-start-[5] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[7] col-start-[6] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[7] col-start-[7] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[7] col-start-[8] border-gray-200 border-b"></div> -->
                    
                    <div class="row-start-[8] col-start-[1] border-gray-200 border-r p-1.5 text-right uppercase sticky left-0"
                        :class="row === 7 ? 'bg-main-600 text-white' : 'bg-white'">
                        7
                    </div>
                    <div v-for="(item, index) in cols" :key="item"
                        @click="selectedCell(item, 7)"
                        :class="'row-start-[8] col-start-['+(index+2)+'] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100'"></div>
                    <!-- <div class="row-start-[8] col-start-[2] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[8] col-start-[3] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[8] col-start-[4] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[8] col-start-[5] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[8] col-start-[6] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[8] col-start-[7] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[8] col-start-[8] border-gray-200 border-b"></div> -->
                    
                    <div class="row-start-[9] col-start-[1] border-gray-200 border-r p-1.5 text-right uppercase sticky left-0"
                        :class="row === 8 ? 'bg-main-600 text-white' : 'bg-white'">
                        8
                    </div>
                    <div v-for="(item, index) in cols" :key="item"
                        @click="selectedCell(item, 8)"
                        :class="'row-start-[9] col-start-['+(index+2)+'] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100'"></div>
                    <!-- <div class="row-start-[9] col-start-[2] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[9] col-start-[3] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[9] col-start-[4] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[9] col-start-[5] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[9] col-start-[6] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[9] col-start-[7] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[9] col-start-[8] border-gray-200 border-b"></div> -->
                    
                    <div class="row-start-[10] col-start-[1] border-gray-200 border-r p-1.5 text-right uppercase sticky left-0"
                        :class="row === 9 ? 'bg-main-600 text-white' : 'bg-white'">
                        9
                    </div>
                    <div v-for="(item, index) in cols" :key="item"
                        @click="selectedCell(item, 9)"
                        :class="'row-start-[10] col-start-['+(index+2)+'] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100'"></div>
                    <!-- <div class="row-start-[10] col-start-[2] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[10] col-start-[3] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[10] col-start-[4] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[10] col-start-[5] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[10] col-start-[6] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[10] col-start-[7] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[10] col-start-[8] border-gray-200 border-b"></div> -->
                    
                    <div class="row-start-[11] col-start-[1] border-gray-200 border-r p-1.5 text-right uppercase sticky left-0"
                        :class="row === 10 ? 'bg-main-600 text-white' : 'bg-white'">
                        10
                    </div>
                    <div v-for="(item, index) in cols" :key="item"
                        @click="selectedCell(item, 10)"
                        :class="'row-start-[11] col-start-['+(index+2)+'] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100'"></div>
                    <!-- <div class="row-start-[11] col-start-[2] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[11] col-start-[3] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[11] col-start-[4] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[11] col-start-[5] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[11] col-start-[6] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[11] col-start-[7] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[11] col-start-[8] border-gray-200 border-b"></div> -->
                    
                    <div class="row-start-[12] col-start-[1] border-gray-200 border-r p-1.5 text-right uppercase sticky left-0"
                        :class="row === 11 ? 'bg-main-600 text-white' : 'bg-white'">
                        11
                    </div>
                    <div v-for="(item, index) in cols" :key="item"
                        @click="selectedCell(item, 11)"
                        :class="'row-start-[12] col-start-['+(index+2)+'] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100'"></div>
                    <!-- <div class="row-start-[12] col-start-[2] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[12] col-start-[3] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[12] col-start-[4] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[12] col-start-[5] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[12] col-start-[6] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[12] col-start-[7] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[12] col-start-[8] border-gray-200 border-b"></div> -->
                    
                    <div class="row-start-[13] col-start-[1] border-gray-200 border-r p-1.5 text-right uppercase sticky left-0"
                        :class="row === 12 ? 'bg-main-600 text-white' : 'bg-white'">
                        12
                    </div>
                    <div v-for="(item, index) in cols" :key="item"
                        @click="selectedCell(item, 12)"
                        :class="'row-start-[13] col-start-['+(index+2)+'] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100'"></div>
                    <!-- <div class="row-start-[13] col-start-[2] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[13] col-start-[3] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[13] col-start-[4] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[13] col-start-[5] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[13] col-start-[6] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[13] col-start-[7] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[13] col-start-[8] border-gray-200 border-b"></div> -->
                    
                    <div class="row-start-[14] col-start-[1] border-gray-200 border-r p-1.5 text-right uppercase sticky left-0"
                        :class="row === 13 ? 'bg-main-600 text-white' : 'bg-white'">
                        13
                    </div>
                    <div v-for="(item, index) in cols" :key="item"
                        @click="selectedCell(item, 13)"
                        :class="'row-start-[14] col-start-['+(index+2)+'] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100'"></div>
                    <!-- <div class="row-start-[14] col-start-[2] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[14] col-start-[3] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[14] col-start-[4] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[14] col-start-[5] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[14] col-start-[6] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[14] col-start-[7] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[14] col-start-[8] border-gray-200 border-b"></div> -->
                    
                    <div class="row-start-[15] col-start-[1] border-gray-200 border-r p-1.5 text-right uppercase sticky left-0"
                        :class="row === 14 ? 'bg-main-600 text-white' : 'bg-white'">
                        14
                    </div>
                    <div v-for="(item, index) in cols" :key="item"
                        @click="selectedCell(item, 14)"
                        :class="'row-start-[15] col-start-['+(index+2)+'] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100'"></div>
                    <!-- <div class="row-start-[15] col-start-[2] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[15] col-start-[3] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[15] col-start-[4] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[15] col-start-[5] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[15] col-start-[6] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[15] col-start-[7] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[15] col-start-[8] border-gray-200 border-b"></div> -->
                    
                    <div class="row-start-[16] col-start-[1] border-gray-200 border-r p-1.5 text-right uppercase sticky left-0"
                        :class="row === 15 ? 'bg-main-600 text-white' : 'bg-white'">
                        15
                    </div>
                    <div v-for="(item, index) in cols" :key="item"
                        @click="selectedCell(item, 15)"
                        :class="'row-start-[16] col-start-['+(index+2)+'] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100'"></div>
                    <!-- <div class="row-start-[16] col-start-[2] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[16] col-start-[3] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[16] col-start-[4] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[16] col-start-[5] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[16] col-start-[6] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[16] col-start-[7] border-gray-200 border-b border-r"></div>
                    <div class="row-start-[16] col-start-[8] border-gray-200 border-b"></div> -->
                    
                    <div class="row-start-[17] col-start-[1] border-gray-200 border-r p-1.5 text-right uppercase sticky left-0"
                        :class="row === 16 ? 'bg-main-600 text-white' : 'bg-white'">
                        16
                    </div>
                    <div v-for="(item, index) in cols" :key="item"
                        @click="selectedCell(item, 16)"
                        :class="'row-start-[17] col-start-['+(index+2)+'] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100'"></div>
                    <!-- <div class="row-start-[17] col-start-[2] border-gray-200 border-r"></div>
                    <div class="row-start-[17] col-start-[3] border-gray-200 border-r"></div>
                    <div class="row-start-[17] col-start-[4] border-gray-200 border-r"></div>
                    <div class="row-start-[17] col-start-[5] border-gray-200 border-r"></div>
                    <div class="row-start-[17] col-start-[6] border-gray-200 border-r"></div>
                    <div class="row-start-[17] col-start-[7] border-gray-200 border-r"></div>
                    <div class="row-start-[17] col-start-[8]"></div> -->
                </div>
            </div>
        </div>
        <!-- <div class="w-full grid grid-cols-12 text-center">
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
        </div> -->
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
        // ABCDEFGHIJKLMNOPQRSTUVWXYZ
        // rows: [
        //     '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16'
        // ],
    }),

    methods: {
        // selectRow: function(data) {
        //     this.row = data
        //     this.cellUpdated()
        // },
        // selectCol: function(data) {
        //     this.col = data
        //     this.cellUpdated()
        // },
        selectedCell: function(col, row) {
            this.col = col
            this.row = row
            console.log('cell: ' + col + ':' + row)
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
