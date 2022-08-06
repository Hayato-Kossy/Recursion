def numberOfDots(x):
    return numberOfDotsHelper(x, 0)
def numberOfDotsHelper(x, res):
    if x <= 0:
        return res
    return numberOfDotsHelper(x - 1, res + x)