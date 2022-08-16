def getDays(dateA,dateB):
    return abs(Algo(dateA[2], dateA[0], dateA[1]) - Algo(dateB[2], dateB[0], dateB[1]))
    
def Algo(y, m, d):
    if m <= 2:
        y -= 1
        m += 12
    dy = 365 * (y - 1)
    c = y // 100;
    dl = (y >> 2) - c + (c >> 2)
    dm = (m * 979 - 1033) >> 5
    
    return dy + dl + dm + d - 1