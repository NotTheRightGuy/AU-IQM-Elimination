import json
import glob

import searchinputresults

with open('/Users/hardiksanghvi/Documents/GitHub/AU-IQM-Elimination/auiqm/amazon-scraper-master/Input/search_output.jsonl', 'r') as json_file:
    json_list = list(json_file)

outfile = open("sample.json","a")
outfile.write("[")
for json_str in json_list:
    result = json.loads(json_str)
    # print(f"result: {result}")

    outfile.write(json_str+","+"\n")
    # print(isinstance(result, dict))

outfile.write("""{"title": "Nicpro 26 PCS Pastel Mechanical Pencil 0.5 mm & 0.7 mm with Bag for School, Cute Mechanical Pencils with 6 Tubes HB Lead Refills, 18 Pcs Eraser Refills For Student Writing, Drawing, Sketching", "url": "/Nicpro-Mechanical-Colored-Supplies-Sketching/dp/B09STKC86F/ref=sr_1_3?keywords=school&qid=1668086736&sr=8-3", "rating": "4.5 out of 5 stars", "reviews": "169", "price": "$15.99", "image": "https://m.media-amazon.com/images/I/71fd5lnhRtL._AC_UL320_.jpg", "search_url": "https://www.amazon.com/s?k=school"}""")
outfile.write("]")
outfile.close()
