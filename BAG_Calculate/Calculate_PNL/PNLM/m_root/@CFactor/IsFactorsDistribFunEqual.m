%% This file were automatically generated by SWIG's MatLab module
%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
%%                                                                         %%
%%                INTEL CORPORATION PROPRIETARY INFORMATION                %%
%%   This software is supplied under the terms of a license agreement or   %%
%%  nondisclosure agreement with Intel Corporation and may not be copied   %%
%%   or disclosed except in accordance with the terms of that agreement.   %%
%%       Copyright (c) 2003 Intel Corporation. All Rights Reserved.        %%
%%                                                                         %%
%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
%% [result, OUTPUTOut2] = IsFactorsDistribFunEqual(varargin)
%%
%% C++ prototype: int IsFactorsDistribFunEqual(pnl::CFactor const *self,pnl::CFactor const *param,float eps,int withCoeff,float *OUTPUT)
%%

function [result, OUTPUTOut2] = IsFactorsDistribFunEqual(varargin)

[result, OUTPUTOut2] = feval('pnl_full', 'CFactor_IsFactorsDistribFunEqual_wrap', varargin{:});

return