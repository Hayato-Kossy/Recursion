hashmap = {
    1000 : "M",
    900 : "CM",
    500 : "D",
    400 : "CD",
    100 : "C",
    90 : "XC",
    50 : "L",
    40 : "XL",
    10 : "X",
    9 : "IX",
    5 : "V",
    4 : "IV",
    1 : "I",
}

def integerToRoman(arabicNumber):
    return solution_under_1000(arabicNumber, 0, "")

def solution_under_1000(arabicNumber, index, ans): 
    if arabicNumber <= 0: 
        return ans

    target_number = arabicNumber % 10 * (10 ** index)
    str_ans = ""

    while (target_number != 0):
        for key in hashmap:
            if target_number >= key:
                str_ans += hashmap[key]
                target_number -= key
                print(target_number)
                break

    #print(arabicNumber)
    return solution_under_1000(arabicNumber // 10, index + 1, str_ans + ans)