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
%% [result] = ConvertWithEvidenceToPotential(varargin)
%%
%% C++ prototype: pnl::CPotential *ConvertWithEvidenceToPotential(pnl::CMixtureGaussianCPD const *self,pnl::CEvidence const *pEvidence,int flagSumOnMixtureNode)
%%

function [result] = ConvertWithEvidenceToPotential(varargin)

[result] = feval('pnl_full', 'CMixtureGaussianCPD_ConvertWithEvidenceToPotential_wrap', varargin{:});
result = CPotential('%%@#DefaultCtor', result);

return