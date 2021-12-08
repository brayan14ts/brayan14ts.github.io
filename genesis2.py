import cv2
import numpy as np
import argparse
import time
import cv2 as cv
import os


def load_yolo():
    net = cv2.dnn.readNet("yolov3.weights", "yolov3.cfg")
    classes = []
    with open("coco.names", "r") as f:
        classes = [line.strip() for line in f.readlines()]
    layers_names = net.getLayerNames()
    output_layers = [layers_names[i - 1] for i in net.getUnconnectedOutLayers()]

    
    colors = np.random.uniform(0, 255, size=(len(classes), 3))
    return net, classes, colors, output