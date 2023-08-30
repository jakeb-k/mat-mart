<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    DB::table('mats')->insert( ['name'=>'Acupressure Mat Yoga Massage Sit Lying Pain Stress Relax Blue 130 x 50cm', 'price'=>53.99, 'sku'=>'MAT1002-BL', 'type'=>'yoga', 'rating'=>1, 'tags'=>'Acupressure,Mat,Yoga,Massage,Sit,Lying,Pain,Stress,Relax,Blue,130 x 50cm,yoga']);      
    DB::table('mats')->insert( ['name'=>'Acupressure Mat Yoga Massage Sit Lying Pain Stress Relax Black 130 x 50cm', 'price'=>53.99, 'sku'=>'MAT1002-BK', 'type'=>'yoga', 'rating'=>1, 'tags'=>'Acupressure,Mat,Yoga,Massage,Sit,Lying,Pain,Stress,Relax,Black,130 x 50cm, yoga']); 
    DB::table('mats')->insert( ['name'=>'Acupressure Mat Yoga Massage Sit Lying Pain Stress Relax Blue 68 x 42cm', 'price'=>35.09, 'sku'=>'MAT1001-BL', 'type'=>'yoga', 'rating'=>1, 'tags'=>'Acupressure,Mat,Yoga,Massage,Sit,Lying,Pain,Stress,Relax,Blue,68,x,42cm,yoga']); 
    DB::table('mats')->insert(['name'=>'Acupressure Mat Yoga Massage Sit Lying Pain Stress Relax Black 68 x 42cm', 'price'=>35.09, 'sku'=>'MAT1002-BK', 'type'=>'yoga', 'rating'=>1, 'tags'=>'Acupressure,Mat,Yoga,Massage,Sit,Lying,Pain,Stress,Relax,Black,68,x,42cm,yoga']); 
    DB::table('mats')->insert(['name'=>'Marlow 10X Artificial Grass Floor Tile Garden Indoor Outdoor Lawn Home Decor', 'price'=>80.99, 'sku'=>'SG1026-NT-10', 'type'=>'outdoor', 'rating'=>1, 'tags'=>'Marlow,10X,Artificial,Grass,Floor,Tile,Garden,Indoor,Outdoor,Lawn,Home,Decor,decorative,outdoor']); 
    DB::table('mats')->insert(['name'=>'Marlow 20X Artificial Grass Floor Tile Garden Indoor Outdoor Lawn Home Decor', 'price'=>148.49, 'sku'=>'SG1026-NT-20', 'type'=>'outdoor', 'rating'=>1, 'tags'=>'Marlow,20X,Artificial,Grass,Floor,Tile,Garden,Indoor,Outdoor,Lawn,Home,Decor,decorative,outdoor']);
    DB::table('mats')->insert(['name'=>'Marlow 30X Artificial Grass Floor Tile Garden Indoor Outdoor Lawn Home Decor', 'price'=>215.99, 'sku'=>'SG1026-NT-30', 'type'=>'outdoor', 'rating'=>1, 'tags'=>'Marlow,30X,Artificial,Grass,Floor,Tile,Garden,Indoor,Outdoor,Lawn,Home,outdoor']); 
    DB::table('mats')->insert(['name'=>'Bathroom Mats Floor Mat Bath Anti Slip Toilet Carpet Meomory Foam Large Grey', 'price'=>28.34, 'sku'=>'HO0563-GY', 'type'=>'bath', 'rating'=>1, 'tags'=>'Bathroom,Mats,Floor,Mat,Bath,Anti,Slip,Toilet,Carpet,Meomory,Foam,Large,Grey utility,bath']); 
    DB::table('mats')->insert(['name'=>'Bath Mat Anti Slip Bathroom Shower Mat Thick Soft Fast Drying 160 x 50 cm', 'price'=>26.99, 'sku'=>'HO0563-CF', 'type'=>'bath', 'rating'=>1, 'tags'=>'Bath,Mat,Anti,Slip,Bathroom,Shower,Mat,Thick,Soft,Fast,Drying,160 x 50cm,bath ']); 
    DB::table('mats')->insert(['name'=>'BoPeep Baby Play Mat EVA Kids Crawling Pad Floor Child Rug Play Carpet 36PCS', 'price'=>67.49, 'sku'=>'KD1104-9PCSx4', 'type'=>'kids', 'rating'=>1, 'tags'=>'BoPeep,Baby,Play,Mat,EVA,Kids,Crawling,Pad,Floor,Child,Rug,Play,Carpet,36PCS,kids']); 
    DB::table('mats')->insert(['name'=>'BoPeep Baby Play Mat EVA Kids Crawling Pad Floor Child Rug Play Carpet 36PCS', 'price'=>67.49, 'sku'=>'KD1103-9PCSx4', 'type'=>'kids', 'rating'=>1, 'tags'=>'BoPeep,Baby,Play,Mat,EVA,Kids,Crawling,Pad,Floor,Child,Rug,Play,Carpet,36PCS,kids']); 
    DB::table('mats')->insert(['name'=>'BoPeep Kids Play Mat Baby Crawling Pad Floor Foldable XPE Foam Non-slip Bear', 'price'=>64.79, 'sku'=>'KD1039', 'type'=>'kids', 'rating'=>1, 'tags'=>'BoPeep,Kids,Play,Mat,Baby,Crawling,Pad,Floor,Foldable,XPE,Foam,Non-slip,Bear,kids']);
    DB::table('mats')->insert(['name'=>'BoPeep Kids Play Mat Baby Crawling Pad Floor Foldable XPE Foam Non-slip Star', 'price'=>64.79, 'sku'=>'KD1037', 'type'=>'kids', 'rating'=>1, 'tags'=>'BoPeep,Kids,Play,Mat,Baby,Crawling,Pad,Floor,Foldable,XPE,Foam,Non-slip,Star,kids']); 
    DB::table('mats')->insert(['name'=>'BoPeep Kids Play Mat Baby Crawling Pad Floor Foldable XPE Foam Non-slip Cloud', 'price'=>64.79, 'sku'=>'KD1036', 'type'=>'kids', 'rating'=>1, 'tags'=>'BoPeep,Kids,Play,Mat,Baby,Crawling,Pad,Floor,Foldable,XPE,Foam,Non-slip,Cloud,kids']); 
    DB::table('mats')->insert(['name'=>'BoPeep Kids Play Mat Baby Crawling Pad Floor Foldable XPE Foam Non-slip Carpet', 'price'=>71.54, 'sku'=>'KD1075', 'type'=>'kids', 'rating'=>1, 'tags'=>'BoPeep,Kids,Play,Mat,Baby,Crawling,Pad,Floor,Foldable,XPE,Foam,Non-slip,Carpet,kids']); 
    DB::table('mats')->insert(['name'=>'BoPeep Kids Play Mat Baby Crawling Pad Floor Foldable XPE Foam Non-slip Carpet', 'price'=>71.54, 'sku'=>'KD1074', 'type'=>'kids', 'rating'=>1, 'tags'=>'BoPeep,Kids,Play,Mat,Baby,Crawling,Pad,Floor,Foldable,XPE,Foam,Non-slip,Carpet,kids']); 
    DB::table('mats')->insert(['name'=>'BoPeep Kids Play Mat Baby Crawling Pad Floor Foldable XPE Foam Non-slip Carpet', 'price'=>71.54, 'sku'=>'KD1073', 'type'=>'kids', 'rating'=>1, 'tags'=>'BoPeep,Kids,Play,Mat,Baby,Crawling,Pad,Floor,Foldable,XPE,Foam,Non-slip,Carpet,kids']); 
    DB::table('mats')->insert(['name'=>'BoPeep Baby Play Mat EVA Kids Crawling Pad Floor Child Rug Play Foam Carpet 9PCS', 'price'=>24.29, 'sku'=>'KD1104-9PCS', 'type'=>'kids', 'rating'=>1, 'tags'=>'BoPeep,Baby,Play,Mat,EVA,Kids,Crawling,Pad,Floor,Child,Rug,Play,Foam,Carpet,9PCS,kids']);
    DB::table('mats')->insert(['name'=>'BoPeep Baby Play Mat EVA Kids Crawling Pad Floor Child Rug Play Foam Carpet 9PCS', 'price'=>26.99, 'sku'=>'KD1103-9PCS', 'type'=>'kids', 'rating'=>1, 'tags'=>'BoPeep,Baby,Play,Mat,EVA,Kids,Crawling,Pad,Floor,Child,Rug,Play,Foam,Carpet,9PCS,kids']);
    DB::table('mats')->insert(['name'=>'Oribel waterproof Splat Mat', 'price'=>79.65, 'sku'=>'OR219-90006', 'type'=>'kids', 'rating'=>1, 'tags'=>'Oribel,waterproof,Splat,Mat,kids ']);
    DB::table('mats')->insert(['name'=>'Chair Mat Carpet Hard Floor Protectors PVC Home Office Room Computer Work Mats Black', 'price'=>45.89, 'sku'=>'E0045-BK', 'type'=>'office', 'rating'=>1, 'tags'=>'Chair,Mat,Carpet,Hard,Floor,Protectors,PVC,Home,Office,Room,Computer,Work,Mats,Black,office']); 
    DB::table('mats')->insert(['name'=>'Chair Mat Carpet Hard Floor Protectors Home Office Room Computer Work PVC Mats Black', 'price'=>60.74, 'sku'=>'T4463-BK', 'type'=>'office', 'rating'=>1, 'tags'=>'Chair,Mat,Carpet,Hard,Floor,Protectors,Home,Office,Room,Computer,Work,PVC,Mats,Black,office']); 
    DB::table('mats')->insert(['name'=>'Chair Mat Carpet Hard Floor Protectors Home Office Room Computer Work PVC Mats No Pin', 'price'=>53.99, 'sku'=>'T4463-NOPIN', 'type'=>'office', 'rating'=>1, 'tags'=>'Chair,Mat,Carpet,Hard,Floor,Protectors,Home,Office,Room,Computer,Work,PVC,Mats,No,Pin,office ']); 
    DB::table('mats')->insert(['name'=>'Chair Mat Carpet Hard Floor Protectors Home Office Room Computer Work PVC Mats No Pin Black', 'price'=>44.54, 'sku'=>'T4463-NOPIN-BK', 'type'=>'office', 'rating'=>1, 'tags'=>'Chair,Mat,Carpet,Hard,Floor,Protectors,Home,Office,Room,Computer,Work,PVC,Mats,No,Pin,Black,office']); 
    DB::table('mats')->insert(['name'=>'Marlow Chair Mat Round Carpet Protectors PVC Home Office Room Computer Mats', 'price'=>56.69, 'sku'=>'T0120', 'type'=>'office', 'rating'=>1, 'tags'=>'Marlow,Chair,Mat,Round,Carpet,Protectors,PVC,Home,Office,Room,Computer,Mats,office ']); 
    DB::table('mats')->insert(['name'=>'Marlow Chair Mat Round Carpet Protectors PVC Home Office Room Computer Mats', 'price'=>56.69, 'sku'=>'T0120-BK', 'type'=>'office', 'rating'=>1, 'tags'=>'Marlow,Chair,Mat,Round,Carpet,Protectors,PVC,Home,Office,Room,Computer,Mats,office ']); 
    DB::table('mats')->insert(['name'=>'Marlow Chair Mat Round Carpet Protectors PVC Home Office Room Computer Mats', 'price'=>45.89, 'sku'=>'E0045-SQ-NOPIN-BK', 'type'=>'office', 'rating'=>1, 'tags'=>'Marlow,Chair,Mat,Round,Carpet,Protectors,PVC,Home,Office,Room,Computer,Mats,office ']); 
    DB::table('mats')->insert(['name'=>'Marlow Chair Mat Round Carpet Protectors PVC Home Office Room Computer Mats', 'price'=>47.24, 'sku'=>'E0045-SQ', 'type'=>'office', 'rating'=>1, 'tags'=>'Marlow,Chair,Mat,Round,Carpet,Protectors,PVC,Home,Office,Room,Computer,Mats,office ']); 
    DB::table('mats')->insert(['name'=>'Marlow Chair Mat Round Carpet Protectors PVC Home Office Room Computer Mats', 'price'=>47.24, 'sku'=>'E0045-SQ-BK', 'type'=>'office', 'rating'=>1, 'tags'=>'Marlow,Chair,Mat,Round,Carpet,Protectors,PVC,Home,Office,Room,Computer,Mats,office ']); 
    DB::table('mats')->insert(['name'=>'Marlow Anti Fatigue Mat Standing Desk Rug Kitchen Home Office Foam Grey 50x80', 'price'=>53.99, 'sku'=>'DH1043-M-GY', 'type'=>'fatigue', 'rating'=>1, 'tags'=>'Marlow,Anti,Fatigue,Mat,Standing,Desk,Rug,Kitchen,Home,Office,Foam,Grey,50x80,office ']); 
    DB::table('mats')->insert(['name'=>'Marlow Anti Fatigue Mat Standing Desk Rug Kitchen Home Office Foam Black 50x80', 'price'=>53.99, 'sku'=>'DH1043-M-BK', 'type'=>'fatigue', 'rating'=>1, 'tags'=>'Marlow,Anti,Fatigue,Mat,Standing,Desk,Rug,Kitchen,Home,Office,Foam,Black,50x80,office ']); 
    DB::table('mats')->insert(['name'=>'Marlow Anti Fatigue Mat Standing Desk Rug Kitchen Home Office Foam Black 51x99', 'price'=>58.04, 'sku'=>'DH1043-L-BK', 'type'=>'fatigue', 'rating'=>1, 'tags'=>'Marlow,Anti,Fatigue,Mat,Standing,Desk,Rug,Kitchen,Home,Office,Foam,Black,51x99,office ']); 
    DB::table('mats')->insert(['name'=>'Carpet Floor Office Home Computer Work Chair Mats Vinyl PVC Plastic 1350x1140mm', 'price'=>53.99, 'sku'=>'T4463', 'type'=>'office', 'rating'=>1, 'tags'=>'Carpet,Floor,Office,Home,Computer,Work,Chair,Mats,Vinyl,PVC,Plastic,1350x1140mm,office ']); 
    DB::table('mats')->insert(['name'=>'Marlow Floor Mat Rugs Shaggy Rug Area Carpet Large Soft Mats 300x200cm Tan', 'price'=>87.74, 'sku'=>'E0044-300x200-TA', 'type'=>'rugs', 'rating'=>1, 'tags'=>'Marlow,Floor,Mat,Rugs,Shaggy,Rug,Area,Carpet,Large,Soft,Mats,300x200cm,Tan,rugs ']); 
    DB::table('mats')->insert(['name'=>'Marlow Floor Mat Rugs Shaggy Rug Area Carpet Large Soft Mats 300x200cm Cream', 'price'=>81.89, 'sku'=>'E0044-300x200-CR', 'type'=>'rugs', 'rating'=>1, 'tags'=>'Marlow,Floor,Mat,Rugs,Shaggy,Rug,Area,Carpet,Large,Soft,Mats,300x200cm,Cream,rugs ']); 
    DB::table('mats')->insert(['name'=>'Marlow Floor Mat Rugs Shaggy Rug Area Carpet Large Soft Mats 300x200cm Purple', 'price'=>81.89, 'sku'=>'E0044-300x200-PR', 'type'=>'rugs', 'rating'=>1, 'tags'=>'Marlow,Floor,Mat,Rugs,Shaggy,Rug,Area,Carpet,Large,Soft,Mats,300x200cm,Purple,rugs ']); 
    DB::table('mats')->insert(['name'=>'Marlow Floor Mat Rugs Shaggy Rug Large Area Carpet Bedroom Living Room 50x80cm', 'price'=>24.29, 'sku'=>'FR2011-50x80', 'type'=>'rugs', 'rating'=>1, 'tags'=>'Marlow,Floor,Mat,Rugs,Shaggy,Rug,Large,Area,Carpet,Bedroom,Living,Room,50x80cm,rugs ']); 
    DB::table('mats')->insert(['name'=>'Marlow Floor Mat Rugs Shaggy Rug Large Area Carpet Bedroom Living Room 50x80cm', 'price'=>29.69, 'sku'=>'FR2010-50x80', 'type'=>'rugs', 'rating'=>1, 'tags'=>'Marlow,Floor,Mat,Rugs,Shaggy,Rug,Large,Area,Carpet,Bedroom,Living,Room,50x80cm,rugs ']); 
    DB::table('mats')->insert(['name'=>'Marlow Floor Mat Rugs Shaggy Rug Large Area Carpet Bedroom Living Room 50x80cm', 'price'=>24.29, 'sku'=>'FR2009-50x80', 'type'=>'rugs', 'rating'=>1, 'tags'=>'Marlow,Floor,Mat,Rugs,Shaggy,Rug,Large,Area,Carpet,Bedroom,Living,Room,50x80cm,rugs ']); 
    DB::table('mats')->insert(['name'=>'Marlow Floor Mat Rugs Shaggy Rug Large Area Carpet Bedroom Living Room 50x80cm', 'price'=>24.29, 'sku'=>'FR2008-50x80', 'type'=>'rugs', 'rating'=>1, 'tags'=>'Marlow,Floor,Mat,Rugs,Shaggy,Rug,Large,Area,Carpet,Bedroom,Living,Room,50x80cm,rugs ']); 
    DB::table('mats')->insert(['name'=>'Marlow Floor Mat Rugs Shaggy Rug Large Area Carpet Bedroom Living Room 50x80cm', 'price'=>24.29, 'sku'=>'FR2007-50x80', 'type'=>'rugs', 'rating'=>1, 'tags'=>'Marlow,Floor,Mat,Rugs,Shaggy,Rug,Large,Area,Carpet,Bedroom,Living,Room,50x80cm,rugs ']); 
    DB::table('mats')->insert(['name'=>'Marlow Floor Mat Rugs Shaggy Rug Large Area Carpet Bedroom Living Room 50x80cm', 'price'=>24.29, 'sku'=>'FR2006-50x80', 'type'=>'rugs', 'rating'=>1, 'tags'=>'Marlow,Floor,Mat,Rugs,Shaggy,Rug,Large,Area,Carpet,Bedroom,Living,Room,50x80cm,rugs ']); 
    DB::table('mats')->insert(['name'=>'Marlow Floor Mat Rugs Shaggy Rug Area Carpet Large Soft Mats 300x200cm Burgundy', 'price'=>81.89, 'sku'=>'E0044-300x200-BG', 'type'=>'rugs', 'rating'=>1, 'tags'=>'Marlow,Floor,Mat,Rugs,Shaggy,Rug,Area,Carpet,Large,Soft,Mats,300x200cm,Burgundy,rugs ']); 
    DB::table('mats')->insert(['name'=>'Marlow Floor Mat Rugs Shaggy Rug Large Area Carpet Bedroom Living Room 200x290cm', 'price'=>102.95, 'sku'=>'FR2006-200x290', 'type'=>'rugs', 'rating'=>1, 'tags'=>'Marlow,Floor,Mat,Rugs,Shaggy,Rug,Large,Area,Carpet,Bedroom,Living,Room,200x290cm,rugs ']); 
    DB::table('mats')->insert(['name'=>'PaWz Dog Mat Pet Calming Bed Memory Foam Orthopedic Removable Cover Washable M', 'price'=>53.99, 'sku'=>'PT1139-M-GN', 'type'=>'pets', 'rating'=>1, 'tags'=>'PaWz,Dog,Mat,Pet,Calming,Bed,Memory,Foam,Orthopedic,Removable,Cover,Washable,M,pets ']); 
    DB::table('mats')->insert(['name'=>'PaWz Dog Mat Pet Calming Bed Memory Foam Orthopedic Removable Cover Washable M', 'price'=>53.99, 'sku'=>'PT1139-M-CF', 'type'=>'pets', 'rating'=>1, 'tags'=>'PaWz,Dog,Mat,Pet,Calming,Bed,Memory,Foam,Orthopedic,Removable,Cover,Washable,M,pets ']); 
    DB::table('mats')->insert(['name'=>'PaWz Dog Mat Pet Calming Bed Memory Foam Orthopedic Removable Cover Washable M', 'price'=>53.99, 'sku'=>'PT1139-M-CH', 'type'=>'pets', 'rating'=>1, 'tags'=>'PaWz,Dog,Mat,Pet,Calming,Bed,Memory,Foam,Orthopedic,Removable,Cover,Washable,M,pets ']); 
    DB::table('mats')->insert(['name'=>'PaWz Dog Mat Pet Calming Bed Memory Foam Orthopedic Removable Cover Washable XL', 'price'=>89.09, 'sku'=>'PT1139-XL-GN', 'type'=>'pets', 'rating'=>1, 'tags'=>'PaWz,Dog,Mat,Pet,Calming,Bed,Memory,Foam,Orthopedic,Removable,Cover,Washable,XL utiltiy, pets ']); 
    DB::table('mats')->insert(['name'=>'PaWz Dog Mat Pet Calming Bed Memory Foam Orthopedic Removable Cover Washable XL', 'price'=>89.09, 'sku'=>'PT1139-XL-CF', 'type'=>'pets', 'rating'=>1, 'tags'=>'PaWz,Dog,Mat,Pet,Calming,Bed,Memory,Foam,Orthopedic,Removable,Cover,Washable,XL,pets ']); 
    DB::table('mats')->insert(['name'=>'PaWz Dog Mat Pet Calming Bed Memory Foam Orthopedic Removable Cover Washable XL', 'price'=>89.09, 'sku'=>'T1139-XL-CH', 'type'=>'pets', 'rating'=>1, 'tags'=>'PaWz,Dog,Mat,Pet,Calming,Bed,Memory,Foam,Orthopedic,Removable,Cover,Washable,XL,pets ']); 
    DB::table('mats')->insert(['name'=>'PaWz Pet Bed Mattress Dog Cat Pad Mat Cushion Soft Winter Warm 2X Large Blue', 'price'=>64.79, 'sku'=>'E0060-XXL-BL', 'type'=>'pets', 'rating'=>1, 'tags'=>'PaWz,Pet,Bed,Mattress,Dog,Cat,Pad,Mat,Cushion,Soft,Winter,Warm,2X,Large,Blue,pets ']); 
    DB::table('mats')->insert(['name'=>'PaWz Pet Bed Mattress Dog Cat Pad Mat Cushion Soft Winter Warm 2X Large Cream', 'price'=>64.79, 'sku'=>'E0060-XXL-CR', 'type'=>'pets', 'rating'=>1, 'tags'=>'PaWz,Pet,Bed,Mattress,Dog,Cat,Pad,Mat,Cushion,Soft,Winter,Warm,2X,Large,Cream,pets ']); 
    DB::table('mats')->insert(['name'=>'PaWz Pet Bed Mattress Dog Cat Pad Mat Puppy Cushion Soft Warm Washable XL Grey', 'price'=>65.09, 'sku'=>'JC1008-XL-GY', 'type'=>'pets', 'rating'=>1, 'tags'=>'PaWz,Pet,Bed,Mattress,Dog,Cat,Pad,Mat,Puppy,Cushion,Soft,Warm,Washable,XL,Grey,pets ']); 
    DB::table('mats')->insert(['name'=>'PaWz Pet Bed Mattress Dog Cat Pad Mat Puppy Cushion Soft Warm Washable XL Blue', 'price'=>62.09, 'sku'=>'JC1008-XL-BL', 'type'=>'pets', 'rating'=>1, 'tags'=>'PaWz,Pet,Bed,Mattress,Dog,Cat,Pad,Mat,Puppy,Cushion,Soft,Warm,Washable,XL,Blue,pets ']); 
    DB::table('mats')->insert(['name'=>'PaWz Pet Cooling Mat Gel Mats Bed Cool Pad Puppy Cat Non-Toxic Beds 40x30cm', 'price'=>25.64, 'sku'=>'T4477-40x30', 'type'=>'pets', 'rating'=>1, 'tags'=>'PaWz,Pet,Cooling,Mat,Gel,Mats,Bed,Cool,Pad,Puppy,Cat,Non-Toxic,Beds,40x30cm,pets']); 
    DB::table('mats')->insert(['name'=>'PaWz Pet Cooling Mat Cat Dog Gel Non-Toxic Bed Pillow Sofa Self-cool Summer L', 'price'=>53.99, 'sku'=>'PT1164-L', 'type'=>'pets', 'rating'=>1, 'tags'=>'PaWz,Pet,Cooling,Mat,Cat,Dog,Gel,Non-Toxic,Bed,Pillow,Sofa,Self-cool,Summer,L,pets ']); 
    DB::table('mats')->insert(['name'=>'PaWz Pet Cooling Mat Cat Dog Gel Non-Toxic Bed Pillow Sofa Self-cool Summer L', 'price'=>48.59, 'sku'=>'PT1163-L', 'type'=>'pets', 'rating'=>1, 'tags'=>'PaWz,Pet,Cooling,Mat,Cat,Dog,Gel,Non-Toxic,Bed,Pillow,Sofa,Self-cool,Summer,L,pets ']); 
    DB::table('mats')->insert(['name'=>'PaWz Pet Cool Gel Mat Cat Bed Dog Bolster Waterproof Self-cooling Pads Summer L', 'price'=>76.94, 'sku'=>'PT1112-L', 'type'=>'pets', 'rating'=>1, 'tags'=>'PaWz,Pet,Cool,Gel,Mat,Cat,Bed,Dog,Bolster,Waterproof,Self-cooling,Pads,Summer,L,pets ']); 
    DB::table('mats')->insert(['name'=>'PaWz Pet Cool Gel Mat Cat Bed Dog Bolster Waterproof Self-cooling Pads Summer L', 'price'=>80.99, 'sku'=>'PT1111-L', 'type'=>'pets', 'rating'=>1, 'tags'=>'PaWz,Pet,Cool,Gel,Mat,Cat,Bed,Dog,Bolster,Waterproof,Self-cooling,Pads,Summer,L,pets ']); 
    DB::table('mats')->insert(['name'=>'PaWz Pet Cool Gel Mat Cat Bed Dog Bolster Waterproof Self-cooling Pads Summer L', 'price'=>80.99, 'sku'=>'PT1110-L', 'type'=>'pets', 'rating'=>1, 'tags'=>'PaWz,Pet,Cool,Gel,Mat,Cat,Bed,Dog,Bolster,Waterproof,Self-cooling,Pads,Summer,L,pets ']); 
    DB::table('mats')->insert(['name'=>'Pet Bed Cat Dog Donut Nest Calming Mat Soft Plush Kennel Teal XL', 'price'=>93.14, 'sku'=>'PT1035-XL-TL', 'type'=>'pets', 'rating'=>1, 'tags'=>'Pet,Bed,Cat,Dog,Donut,Nest,Calming,Mat,Soft,Plush,Kennel,Teal,XL,pets ']); 
    DB::table('mats')->insert(['name'=>'Pet Bed Cat Dog Donut Nest Calming Mat Soft Plush Kennel Pink XL', 'price'=>93.14, 'sku'=>'PT1035-XL-PK', 'type'=>'pets', 'rating'=>1, 'tags'=>'Pet,Bed,Cat,Dog,Donut,Nest,Calming,Mat,Soft,Plush,Kennel,Pink,XL,pets ']); 
    }
}
