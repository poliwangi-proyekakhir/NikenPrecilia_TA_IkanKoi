import numpy as np
import pandas as pd
import sys

from sklearn.preprocessing import LabelEncoder

ikan = pd.read_csv(sys.argv[3], ';')
ikan.head(10)

# PREPROCESSING

ikan.drop('Gender', axis=1, inplace=True)
ikan.drop('Umur', axis=1, inplace=True)
ikan.drop('Jumlah Corak', axis=1, inplace=True)
ikan.drop('Corak Dominan', axis=1, inplace=True)
ikan.drop('Spesifikasi', axis=1, inplace=True)

ikan

from sklearn.preprocessing import LabelEncoder
encoder = LabelEncoder()

ikan ['Jenis Ikan'] = ikan['Jenis Ikan'].map({'Chagoi':0, 'Goromo':1, 
'Kohaku':2,'Platinum':3, 'Sanke':4, 'Shiro':5, 'Showa':6, 'Shusui':7, 
'Tancho':8, 'Utsuri':9 })

ikan['Jenis Ikan'] = encoder.fit_transform(ikan['Jenis Ikan'])

ikan.head(800)

ikan.isnull().sum()

ikan

ikan.shape

x = ikan[['Jenis Ikan', 'Ukuran']]
y = ikan.Harga
x.shape, y.shape

from sklearn.model_selection import train_test_split
x_ikan, x_cv, y_ikan, y_cv = train_test_split(x,y, test_size = 0.2, 
random_state = 10)

from sklearn.ensemble import RandomForestClassifier
model = RandomForestClassifier(max_depth=4, random_state = 10)
model.fit(x_ikan, y_ikan)

from sklearn.metrics import accuracy_score
pred_cv = model.predict(x_cv)
accuracy_score(y_cv,pred_cv)

pred_ikan = model.predict(x_ikan)
accuracy_score(y_ikan,pred_ikan)

import pickle
pickle_out = open("classifier.pkl", mode = "wb")
pickle.dump(model, pickle_out)
pickle_out.close()
pickle_in = open('classifier.pkl','rb')
classifier = pickle.load(pickle_in)

def prediction(Jenis_Ikan,Ukuran):
  if Jenis_Ikan == "Chagoi":
    Jenis_Ikan = 0
  elif Jenis_Ikan == "Goromo":
    Jenis_Ikan = 1
  elif Jenis_Ikan == "Kohaku":
    Jenis_Ikan = 2
  elif Jenis_Ikan == "Platinum":
    Jenis_Ikan = 3
  elif Jenis_Ikan == "Sanke":
    Jenis_Ikan = 4
  elif Jenis_Ikan == "Shiro":
    Jenis_Ikan = 5
  elif Jenis_Ikan == "Showa":
    Jenis_Ikan = 6
  elif Jenis_Ikan == "Shusui":
    Jenis_Ikan = 7
  elif Jenis_Ikan == "Tancho":
    Jenis_Ikan = 8
  elif Jenis_Ikan == "Utsuri":
    Jenis_Ikan = 9
 
  prediction = classifier.predict(
      [[Jenis_Ikan,Ukuran]])
  
  return prediction

def main():
    Jenis_Ikan = sys.argv[1]
    Ukuran = sys.argv[2]

    result = prediction(Jenis_Ikan, Ukuran)
    print(result)

if __name__ =='__main__':
    main()
