def recursiveDigitsAdded(digits):
    return digits if digits < 10 else recursiveDigitsAddedHelper(digits, 0)
def recursiveDigitsAddedHelper(digits, res):
    if digits < 10:
        return res 
    sum_num = 0
    while digits > 0:
        sum_num += digits % 10
        digits //= 10  
    return recursiveDigitsAddedHelper(sum_num, res + sum_num)