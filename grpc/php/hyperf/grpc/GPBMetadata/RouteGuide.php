<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: route_guide.proto

namespace GPBMetadata;

class RouteGuide
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
route_guide.proto
routeguide",
Point
latitude (
	longitude ("I
	Rectangle
lo (2.routeguide.Point
hi (2.routeguide.Point"<
Feature
name (	#
location (2.routeguide.Point"A
	RouteNote#
location (2.routeguide.Point
message (	"b
RouteSummary
point_count (
feature_count (
distance (
elapsed_time (2�

RouteGuide6

GetFeature.routeguide.Point.routeguide.Feature" >
ListFeatures.routeguide.Rectangle.routeguide.Feature" 0>
RecordRoute.routeguide.Point.routeguide.RouteSummary" (?
	RouteChat.routeguide.RouteNote.routeguide.RouteNote" (0Bh
io.grpc.examples.routeguideBRouteGuideProtoPZ6google.golang.org/grpc/examples/route_guide/routeguidebproto3'
        , true);

        static::$is_initialized = true;
    }
}

