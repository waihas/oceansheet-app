<template>
    <div>
        <div class="relative rounded-xl overflow-auto">
            <div class="mx-4 bg-white border overflow-hidden">
                <div class="overflow-scroll grid grid-cols-[70px,repeat(26,150px)] grid-rows-[auto,repeat(10,50px)] max-h-[350px]">
                    
                    <!-- Alphabets -->
                    <div class="row-start-[1] col-start-[1] sticky top-0 z-10 bg-white border-gray-200 border-b text-center py-2">
                    </div>
                    <div :class="col === 'A' ? 'bg-main-600 text-white ' : 'bg-white'"
                        class="row-start-[1] col-start-[2] sticky top-0 z-10 border-gray-200 border-b py-2 text-center">
                        A
                    </div>
                    <div :class="col === 'B' ? 'bg-main-600 text-white ' : 'bg-white'"
                        class="row-start-[1] col-start-[3] sticky top-0 z-10 border-gray-200 border-b py-2 text-center">
                        B
                    </div>
                    <div :class="col === 'C' ? 'bg-main-600 text-white ' : 'bg-white'"
                        class="row-start-[1] col-start-[4] sticky top-0 z-10 border-gray-200 border-b py-2 text-center">
                        C
                    </div>
                    <div :class="col === 'D' ? 'bg-main-600 text-white ' : 'bg-white'"
                        class="row-start-[1] col-start-[5] sticky top-0 z-10 border-gray-200 border-b py-2 text-center">
                        D
                    </div>
                    <div :class="col === 'E' ? 'bg-main-600 text-white ' : 'bg-white'"
                        class="row-start-[1] col-start-[6] sticky top-0 z-10 border-gray-200 border-b py-2 text-center">
                        E
                    </div>
                    <div :class="col === 'F' ? 'bg-main-600 text-white ' : 'bg-white'"
                        class="row-start-[1] col-start-[7] sticky top-0 z-10 border-gray-200 border-b py-2 text-center">
                        F
                    </div>
                    <div :class="col === 'G' ? 'bg-main-600 text-white ' : 'bg-white'"
                        class="row-start-[1] col-start-[8] sticky top-0 z-10 border-gray-200 border-b py-2 text-center">
                        G
                    </div>
                    <div :class="col === 'H' ? 'bg-main-600 text-white ' : 'bg-white'"
                        class="row-start-[1] col-start-[9] sticky top-0 z-10 border-gray-200 border-b py-2 text-center">
                        H
                    </div>
                    <div :class="col === 'I' ? 'bg-main-600 text-white ' : 'bg-white'"
                        class="row-start-[1] col-start-[10] sticky top-0 z-10 border-gray-200 border-b py-2 text-center">
                        I
                    </div>
                    <div :class="col === 'J' ? 'bg-main-600 text-white ' : 'bg-white'"
                        class="row-start-[1] col-start-[11] sticky top-0 z-10 border-gray-200 border-b py-2 text-center">
                        J
                    </div>
                    <div :class="col === 'K' ? 'bg-main-600 text-white ' : 'bg-white'"
                        class="row-start-[1] col-start-[12] sticky top-0 z-10 border-gray-200 border-b py-2 text-center">
                        K
                    </div>
                    <div :class="col === 'L' ? 'bg-main-600 text-white ' : 'bg-white'"
                        class="row-start-[1] col-start-[13] sticky top-0 z-10 border-gray-200 border-b py-2 text-center">
                        L
                    </div>
                    <div :class="col === 'M' ? 'bg-main-600 text-white ' : 'bg-white'"
                        class="row-start-[1] col-start-[14] sticky top-0 z-10 border-gray-200 border-b py-2 text-center">
                        M
                    </div>
                    <div :class="col === 'N' ? 'bg-main-600 text-white ' : 'bg-white'"
                        class="row-start-[1] col-start-[15] sticky top-0 z-10 border-gray-200 border-b py-2 text-center">
                        N
                    </div>
                    <div :class="col === 'O' ? 'bg-main-600 text-white ' : 'bg-white'"
                        class="row-start-[1] col-start-[16] sticky top-0 z-10 border-gray-200 border-b py-2 text-center">
                        O
                    </div>
                    <div :class="col === 'P' ? 'bg-main-600 text-white ' : 'bg-white'"
                        class="row-start-[1] col-start-[17] sticky top-0 z-10 border-gray-200 border-b py-2 text-center">
                        P
                    </div>
                    <div :class="col === 'Q' ? 'bg-main-600 text-white ' : 'bg-white'"
                        class="row-start-[1] col-start-[18] sticky top-0 z-10 border-gray-200 border-b py-2 text-center">
                        Q
                    </div>
                    <div :class="col === 'R' ? 'bg-main-600 text-white ' : 'bg-white'"
                        class="row-start-[1] col-start-[19] sticky top-0 z-10 border-gray-200 border-b py-2 text-center">
                        R
                    </div>
                    <div :class="col === 'S' ? 'bg-main-600 text-white ' : 'bg-white'"
                        class="row-start-[1] col-start-[20] sticky top-0 z-10 border-gray-200 border-b py-2 text-center">
                        S
                    </div>
                    <div :class="col === 'T' ? 'bg-main-600 text-white ' : 'bg-white'"
                        class="row-start-[1] col-start-[21] sticky top-0 z-10 border-gray-200 border-b py-2 text-center">
                        T
                    </div>
                    <div :class="col === 'U' ? 'bg-main-600 text-white ' : 'bg-white'"
                        class="row-start-[1] col-start-[22] sticky top-0 z-10 border-gray-200 border-b py-2 text-center">
                        U
                    </div>
                    <div :class="col === 'V' ? 'bg-main-600 text-white ' : 'bg-white'"
                        class="row-start-[1] col-start-[23] sticky top-0 z-10 border-gray-200 border-b py-2 text-center">
                        V
                    </div>
                    <div :class="col === 'W' ? 'bg-main-600 text-white ' : 'bg-white'"
                        class="row-start-[1] col-start-[24] sticky top-0 z-10 border-gray-200 border-b py-2 text-center">
                        W
                    </div>
                    <div :class="col === 'X' ? 'bg-main-600 text-white ' : 'bg-white'"
                        class="row-start-[1] col-start-[25] sticky top-0 z-10 border-gray-200 border-b py-2 text-center">
                        X
                    </div>
                    <div :class="col === 'Y' ? 'bg-main-600 text-white ' : 'bg-white'"
                        class="row-start-[1] col-start-[26] sticky top-0 z-10 border-gray-200 border-b py-2 text-center">
                        Y
                    </div>
                    <div :class="col === 'Z' ? 'bg-main-600 text-white ' : 'bg-white'"
                        class="row-start-[1] col-start-[27] sticky top-0 z-10 border-gray-200 border-b py-2 text-center">
                        Z
                    </div>
                    
                    <!-- 1 -->
                    <div :class="row === 1 ? 'bg-main-600 text-white' : 'bg-white'"
                        class="row-start-[2] col-start-[1] border-gray-200 border-r p-1.5 text-right uppercase sticky left-0">
                        1
                    </div> 
                    <div @click="selectedCell('A', 1)" class="row-start-[2] col-start-[2] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('B', 1)" class="row-start-[2] col-start-[3] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('C', 1)" class="row-start-[2] col-start-[4] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('D', 1)" class="row-start-[2] col-start-[5] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('E', 1)" class="row-start-[2] col-start-[6] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('F', 1)" class="row-start-[2] col-start-[7] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('G', 1)" class="row-start-[2] col-start-[8] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('H', 1)" class="row-start-[2] col-start-[9] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('I', 1)" class="row-start-[2] col-start-[10] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('J', 1)" class="row-start-[2] col-start-[11] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('K', 1)" class="row-start-[2] col-start-[12] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('L', 1)" class="row-start-[2] col-start-[13] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('M', 1)" class="row-start-[2] col-start-[14] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('N', 1)" class="row-start-[2] col-start-[15] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('O', 1)" class="row-start-[2] col-start-[16] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('P', 1)" class="row-start-[2] col-start-[17] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('Q', 1)" class="row-start-[2] col-start-[18] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('R', 1)" class="row-start-[2] col-start-[19] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('S', 1)" class="row-start-[2] col-start-[20] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('T', 1)" class="row-start-[2] col-start-[21] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('U', 1)" class="row-start-[2] col-start-[22] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('V', 1)" class="row-start-[2] col-start-[23] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('W', 1)" class="row-start-[2] col-start-[24] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('X', 1)" class="row-start-[2] col-start-[25] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('Y', 1)" class="row-start-[2] col-start-[26] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('Z', 1)" class="row-start-[2] col-start-[27] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>

                    <!-- 2 -->
                    <div :class="row === 2 ? 'bg-main-600 text-white' : 'bg-white'"
                        class="row-start-[3] col-start-[1] border-gray-200 border-r p-1.5 text-right uppercase sticky left-0">
                        2
                    </div> 
                    <div @click="selectedCell('A', 2)" class="row-start-[3] col-start-[2] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('B', 2)" class="row-start-[3] col-start-[3] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('C', 2)" class="row-start-[3] col-start-[4] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('D', 2)" class="row-start-[3] col-start-[5] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('E', 2)" class="row-start-[3] col-start-[6] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('F', 2)" class="row-start-[3] col-start-[7] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('G', 2)" class="row-start-[3] col-start-[8] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('H', 2)" class="row-start-[3] col-start-[9] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('I', 2)" class="row-start-[3] col-start-[10] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('J', 2)" class="row-start-[3] col-start-[11] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('K', 2)" class="row-start-[3] col-start-[12] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('L', 2)" class="row-start-[3] col-start-[13] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('M', 2)" class="row-start-[3] col-start-[14] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('N', 2)" class="row-start-[3] col-start-[15] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('O', 2)" class="row-start-[3] col-start-[16] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('P', 2)" class="row-start-[3] col-start-[17] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('Q', 2)" class="row-start-[3] col-start-[18] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('R', 2)" class="row-start-[3] col-start-[19] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('S', 2)" class="row-start-[3] col-start-[20] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('T', 2)" class="row-start-[3] col-start-[21] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('U', 2)" class="row-start-[3] col-start-[22] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('V', 2)" class="row-start-[3] col-start-[23] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('W', 2)" class="row-start-[3] col-start-[24] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('X', 2)" class="row-start-[3] col-start-[25] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('Y', 2)" class="row-start-[3] col-start-[26] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('Z', 2)" class="row-start-[3] col-start-[27] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>

                    <!-- 3 -->
                    <div :class="row === 3 ? 'bg-main-600 text-white' : 'bg-white'"
                        class="row-start-[4] col-start-[1] border-gray-200 border-r p-1.5 text-right uppercase sticky left-0">
                        3
                    </div> 
                    <div @click="selectedCell('A', 3)" class="row-start-[4] col-start-[2] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('B', 3)" class="row-start-[4] col-start-[3] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('C', 3)" class="row-start-[4] col-start-[4] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('D', 3)" class="row-start-[4] col-start-[5] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('E', 3)" class="row-start-[4] col-start-[6] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('F', 3)" class="row-start-[4] col-start-[7] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('G', 3)" class="row-start-[4] col-start-[8] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('H', 3)" class="row-start-[4] col-start-[9] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('I', 3)" class="row-start-[4] col-start-[10] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('J', 3)" class="row-start-[4] col-start-[11] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('K', 3)" class="row-start-[4] col-start-[12] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('L', 3)" class="row-start-[4] col-start-[13] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('M', 3)" class="row-start-[4] col-start-[14] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('N', 3)" class="row-start-[4] col-start-[15] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('O', 3)" class="row-start-[4] col-start-[16] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('P', 3)" class="row-start-[4] col-start-[17] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('Q', 3)" class="row-start-[4] col-start-[18] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('R', 3)" class="row-start-[4] col-start-[19] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('S', 3)" class="row-start-[4] col-start-[20] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('T', 3)" class="row-start-[4] col-start-[21] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('U', 3)" class="row-start-[4] col-start-[22] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('V', 3)" class="row-start-[4] col-start-[23] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('W', 3)" class="row-start-[4] col-start-[24] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('X', 3)" class="row-start-[4] col-start-[25] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('Y', 3)" class="row-start-[4] col-start-[26] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('Z', 3)" class="row-start-[4] col-start-[27] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>

                    <!-- 4 -->
                    <div :class="row === 4 ? 'bg-main-600 text-white' : 'bg-white'"
                        class="row-start-[5] col-start-[1] border-gray-200 border-r p-1.5 text-right uppercase sticky left-0">
                        4
                    </div>
                    <div @click="selectedCell('A', 4)" class="row-start-[5] col-start-[2] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('B', 4)" class="row-start-[5] col-start-[3] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('C', 4)" class="row-start-[5] col-start-[4] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('D', 4)" class="row-start-[5] col-start-[5] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('E', 4)" class="row-start-[5] col-start-[6] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('F', 4)" class="row-start-[5] col-start-[7] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('G', 4)" class="row-start-[5] col-start-[8] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('H', 4)" class="row-start-[5] col-start-[9] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('I', 4)" class="row-start-[5] col-start-[10] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('J', 4)" class="row-start-[5] col-start-[11] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('K', 4)" class="row-start-[5] col-start-[12] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('L', 4)" class="row-start-[5] col-start-[13] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('M', 4)" class="row-start-[5] col-start-[14] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('N', 4)" class="row-start-[5] col-start-[15] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('O', 4)" class="row-start-[5] col-start-[16] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('P', 4)" class="row-start-[5] col-start-[17] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('Q', 4)" class="row-start-[5] col-start-[18] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('R', 4)" class="row-start-[5] col-start-[19] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('S', 4)" class="row-start-[5] col-start-[20] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('T', 4)" class="row-start-[5] col-start-[21] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('U', 4)" class="row-start-[5] col-start-[22] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('V', 4)" class="row-start-[5] col-start-[23] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('W', 4)" class="row-start-[5] col-start-[24] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('X', 4)" class="row-start-[5] col-start-[25] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('Y', 4)" class="row-start-[5] col-start-[26] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('Z', 4)" class="row-start-[5] col-start-[27] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>

                    <!-- 5 -->
                    <div :class="row === 5 ? 'bg-main-600 text-white' : 'bg-white'"
                        class="row-start-[6] col-start-[1] border-gray-200 border-r p-1.5 text-right uppercase sticky left-0">
                        5
                    </div> 
                    <div @click="selectedCell('A', 5)" class="row-start-[6] col-start-[2] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('B', 5)" class="row-start-[6] col-start-[3] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('C', 5)" class="row-start-[6] col-start-[4] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('D', 5)" class="row-start-[6] col-start-[5] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('E', 5)" class="row-start-[6] col-start-[6] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('F', 5)" class="row-start-[6] col-start-[7] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('G', 5)" class="row-start-[6] col-start-[8] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('H', 5)" class="row-start-[6] col-start-[9] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('I', 5)" class="row-start-[6] col-start-[10] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('J', 5)" class="row-start-[6] col-start-[11] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('K', 5)" class="row-start-[6] col-start-[12] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('L', 5)" class="row-start-[6] col-start-[13] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('M', 5)" class="row-start-[6] col-start-[14] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('N', 5)" class="row-start-[6] col-start-[15] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('O', 5)" class="row-start-[6] col-start-[16] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('P', 5)" class="row-start-[6] col-start-[17] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('Q', 5)" class="row-start-[6] col-start-[18] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('R', 5)" class="row-start-[6] col-start-[19] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('S', 5)" class="row-start-[6] col-start-[20] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('T', 5)" class="row-start-[6] col-start-[21] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('U', 5)" class="row-start-[6] col-start-[22] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('V', 5)" class="row-start-[6] col-start-[23] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('W', 5)" class="row-start-[6] col-start-[24] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('X', 5)" class="row-start-[6] col-start-[25] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('Y', 5)" class="row-start-[6] col-start-[26] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('Z', 5)" class="row-start-[6] col-start-[27] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>

                    <!-- 6 -->
                    <div :class="row === 6 ? 'bg-main-600 text-white' : 'bg-white'"
                        class="row-start-[7] col-start-[1] border-gray-200 border-r p-1.5 text-right uppercase sticky left-0">
                        6
                    </div> 
                    <div @click="selectedCell('A', 6)" class="row-start-[7] col-start-[2] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('B', 6)" class="row-start-[7] col-start-[3] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('C', 6)" class="row-start-[7] col-start-[4] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('D', 6)" class="row-start-[7] col-start-[5] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('E', 6)" class="row-start-[7] col-start-[6] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('F', 6)" class="row-start-[7] col-start-[7] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('G', 6)" class="row-start-[7] col-start-[8] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('H', 6)" class="row-start-[7] col-start-[9] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('I', 6)" class="row-start-[7] col-start-[10] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('J', 6)" class="row-start-[7] col-start-[11] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('K', 6)" class="row-start-[7] col-start-[12] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('L', 6)" class="row-start-[7] col-start-[13] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('M', 6)" class="row-start-[7] col-start-[14] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('N', 6)" class="row-start-[7] col-start-[15] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('O', 6)" class="row-start-[7] col-start-[16] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('P', 6)" class="row-start-[7] col-start-[17] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('Q', 6)" class="row-start-[7] col-start-[18] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('R', 6)" class="row-start-[7] col-start-[19] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('S', 6)" class="row-start-[7] col-start-[20] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('T', 6)" class="row-start-[7] col-start-[21] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('U', 6)" class="row-start-[7] col-start-[22] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('V', 6)" class="row-start-[7] col-start-[23] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('W', 6)" class="row-start-[7] col-start-[24] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('X', 6)" class="row-start-[7] col-start-[25] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('Y', 6)" class="row-start-[7] col-start-[26] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('Z', 6)" class="row-start-[7] col-start-[27] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>

                    <!-- 7 -->
                    <div :class="row === 7 ? 'bg-main-600 text-white' : 'bg-white'"
                        class="row-start-[8] col-start-[1] border-gray-200 border-r p-1.5 text-right uppercase sticky left-0">
                        7
                    </div> 
                    <div @click="selectedCell('A', 7)" class="row-start-[8] col-start-[2] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('B', 7)" class="row-start-[8] col-start-[3] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('C', 7)" class="row-start-[8] col-start-[4] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('D', 7)" class="row-start-[8] col-start-[5] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('E', 7)" class="row-start-[8] col-start-[6] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('F', 7)" class="row-start-[8] col-start-[7] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('G', 7)" class="row-start-[8] col-start-[8] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('H', 7)" class="row-start-[8] col-start-[9] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('I', 7)" class="row-start-[8] col-start-[10] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('J', 7)" class="row-start-[8] col-start-[11] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('K', 7)" class="row-start-[8] col-start-[12] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('L', 7)" class="row-start-[8] col-start-[13] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('M', 7)" class="row-start-[8] col-start-[14] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('N', 7)" class="row-start-[8] col-start-[15] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('O', 7)" class="row-start-[8] col-start-[16] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('P', 7)" class="row-start-[8] col-start-[17] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('Q', 7)" class="row-start-[8] col-start-[18] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('R', 7)" class="row-start-[8] col-start-[19] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('S', 7)" class="row-start-[8] col-start-[20] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('T', 7)" class="row-start-[8] col-start-[21] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('U', 7)" class="row-start-[8] col-start-[22] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('V', 7)" class="row-start-[8] col-start-[23] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('W', 7)" class="row-start-[8] col-start-[24] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('X', 7)" class="row-start-[8] col-start-[25] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('Y', 7)" class="row-start-[8] col-start-[26] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('Z', 7)" class="row-start-[8] col-start-[27] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>

                    <!-- 8 -->
                    <div :class="row === 8 ? 'bg-main-600 text-white' : 'bg-white'"
                        class="row-start-[9] col-start-[1] border-gray-200 border-r p-1.5 text-right uppercase sticky left-0">
                        8
                    </div> 
                    <div @click="selectedCell('A', 8)" class="row-start-[9] col-start-[2] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('B', 8)" class="row-start-[9] col-start-[3] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('C', 8)" class="row-start-[9] col-start-[4] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('D', 8)" class="row-start-[9] col-start-[5] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('E', 8)" class="row-start-[9] col-start-[6] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('F', 8)" class="row-start-[9] col-start-[7] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('G', 8)" class="row-start-[9] col-start-[8] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('H', 8)" class="row-start-[9] col-start-[9] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('I', 8)" class="row-start-[9] col-start-[10] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('J', 8)" class="row-start-[9] col-start-[11] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('K', 8)" class="row-start-[9] col-start-[12] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('L', 8)" class="row-start-[9] col-start-[13] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('M', 8)" class="row-start-[9] col-start-[14] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('N', 8)" class="row-start-[9] col-start-[15] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('O', 8)" class="row-start-[9] col-start-[16] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('P', 8)" class="row-start-[9] col-start-[17] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('Q', 8)" class="row-start-[9] col-start-[18] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('R', 8)" class="row-start-[9] col-start-[19] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('S', 8)" class="row-start-[9] col-start-[20] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('T', 8)" class="row-start-[9] col-start-[21] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('U', 8)" class="row-start-[9] col-start-[22] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('V', 8)" class="row-start-[9] col-start-[23] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('W', 8)" class="row-start-[9] col-start-[24] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('X', 8)" class="row-start-[9] col-start-[25] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('Y', 8)" class="row-start-[9] col-start-[26] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('Z', 8)" class="row-start-[9] col-start-[27] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>

                    <!-- 9 -->
                    <div :class="row === 9 ? 'bg-main-600 text-white' : 'bg-white'"
                        class="row-start-[10] col-start-[1] border-gray-200 border-r p-1.5 text-right uppercase sticky left-0">
                        9
                    </div>
                    <div @click="selectedCell('A', 9)" class="row-start-[10] col-start-[2] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('B', 9)" class="row-start-[10] col-start-[3] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('C', 9)" class="row-start-[10] col-start-[4] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('D', 9)" class="row-start-[10] col-start-[5] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('E', 9)" class="row-start-[10] col-start-[6] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('F', 9)" class="row-start-[10] col-start-[7] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('G', 9)" class="row-start-[10] col-start-[8] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('H', 9)" class="row-start-[10] col-start-[9] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('I', 9)" class="row-start-[10] col-start-[10] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('J', 9)" class="row-start-[10] col-start-[11] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('K', 9)" class="row-start-[10] col-start-[12] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('L', 9)" class="row-start-[10] col-start-[13] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('M', 9)" class="row-start-[10] col-start-[14] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('N', 9)" class="row-start-[10] col-start-[15] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('O', 9)" class="row-start-[10] col-start-[16] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('P', 9)" class="row-start-[10] col-start-[17] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('Q', 9)" class="row-start-[10] col-start-[18] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('R', 9)" class="row-start-[10] col-start-[19] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('S', 9)" class="row-start-[10] col-start-[20] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('T', 9)" class="row-start-[10] col-start-[21] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('U', 9)" class="row-start-[10] col-start-[22] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('V', 9)" class="row-start-[10] col-start-[23] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('W', 9)" class="row-start-[10] col-start-[24] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('X', 9)" class="row-start-[10] col-start-[25] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('Y', 9)" class="row-start-[10] col-start-[26] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('Z', 9)" class="row-start-[10] col-start-[27] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    
                    <!-- 10 -->
                    <div :class="row === 10 ? 'bg-main-600 text-white' : 'bg-white'"
                        class="row-start-[11] col-start-[1] border-gray-200 border-r p-1.5 text-right uppercase sticky left-0">
                        10
                    </div> 
                    <div @click="selectedCell('A', 10)" class="row-start-[11] col-start-[2] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('B', 10)" class="row-start-[11] col-start-[3] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('C', 10)" class="row-start-[11] col-start-[4] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('D', 10)" class="row-start-[11] col-start-[5] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('E', 10)" class="row-start-[11] col-start-[6] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('F', 10)" class="row-start-[11] col-start-[7] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('G', 10)" class="row-start-[11] col-start-[8] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('H', 10)" class="row-start-[11] col-start-[9] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('I', 10)" class="row-start-[11] col-start-[10] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('J', 10)" class="row-start-[11] col-start-[11] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('K', 10)" class="row-start-[11] col-start-[12] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('L', 10)" class="row-start-[11] col-start-[13] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('M', 10)" class="row-start-[11] col-start-[14] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('N', 10)" class="row-start-[11] col-start-[15] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('O', 10)" class="row-start-[11] col-start-[16] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('P', 10)" class="row-start-[11] col-start-[17] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('Q', 10)" class="row-start-[11] col-start-[18] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('R', 10)" class="row-start-[11] col-start-[19] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('S', 10)" class="row-start-[11] col-start-[20] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('T', 10)" class="row-start-[11] col-start-[21] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('U', 10)" class="row-start-[11] col-start-[22] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('V', 10)" class="row-start-[11] col-start-[23] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('W', 10)" class="row-start-[11] col-start-[24] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('X', 10)" class="row-start-[11] col-start-[25] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('Y', 10)" class="row-start-[11] col-start-[26] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                    <div @click="selectedCell('Z', 10)" class="row-start-[11] col-start-[27] border-gray-200 border-b border-r cursor-pointer hover:bg-gray-100"></div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'SheetRowCol',

    data: () => ({
        col: '',
        row: '',
    }),

    methods: {
        selectedCell: function(col, row) {
            this.col = col
            this.row = row
            // console.log('cell: ' + col + ':' + row)
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