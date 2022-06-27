import math
def splitAndAdd(digits):
    if digits < 10: return digits
    return digits % 10 + splitAndAdd(math.floor(digits / 10))